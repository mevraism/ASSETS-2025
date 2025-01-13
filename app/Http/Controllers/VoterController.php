<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Voter;
use App\Models\Token;
use Illuminate\Support\Facades\DB;


require base_path().'\vendor\phpmailer\phpmailer\src\Exception.php';
require base_path().'\vendor\phpmailer\phpmailer\src\PHPMailer.php';
require base_path().'\vendor\phpmailer\phpmailer\src\SMTP.php';

require base_path().'\vendor\autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class VoterController extends Controller
{
    public function index(){        
        $batas = 20;
        $tabel_voter = DB::table('voter')->simplePaginate(10);
        // dd($tabel_voter);
        $no = 0;

        return view('login/voter', compact('tabel_voter', 'no'));
    }

    public function tambah(Request $req){
        $voter = new Voter;
        $this->validate($req,[
            'email'     => 'required|string',
            'nim'       => 'required|string',
            'angkatan'  => 'required|numeric'
        ]);
        $voter->email = $req->email;
        $voter->nim = $req->nim;
        $voter->angkatan = $req->angkatan;
        $voter->created_at = NULL;
        $voter->updated_at = NULL;
        $voter->save();

        return $this->token($req->email)->with('pesan', 'Voter berhasil ditambahkan');
    }

    
    public function token($req){
        $token = new Token;
        $token->email = $req;
        $token->token = getToken();
        $token->created_at = NULL;
        $token->updated_at = NULL;
        $token->save();

        return redirect('/home/voter')->with('pesan', 'Token berhasil digenerate!');
    }

    public function delete($req){
        DB::table('token_tabel')->where('email', '=', $req)->delete();
        DB::table('voter')->where('email', '=', $req)->delete();

        return redirect('/home/voter')->with('pesan', 'Voter berhasil dihapus!');
    }

    public function generateTokenAll(){
        $voter = Voter::all();
        foreach ($voter as $voter){
            $tokens = new Token;
            $tokens->email = $voter->email;
            $tokens->token = getToken();
            $tokens->created_at = NULL;
            $tokens->updated_at = NULL;
            $tokens->save();
        }

        return redirect('/home/voter')->with('pesan', 'Token berhasil digenerate ke semua voter!');
    }

    public function sendEmail($req){
        $token = DB::table('token_tabel')->where('email', '=', $req)->get();
        $mail = new PHPMailer(true);
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;  
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'mail.learnwithacruz.my.id';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'buatassets@learnwithacruz.my.id';                     //SMTP username
        $mail->Password   = 'Assets20202021';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;  

        //Recipients
        $mail->setFrom('buatassets@learnwithacruz.my.id', 'ASSETS UGM');     //Add a recipient
        $mail->addAddress($req);               //Name is optional
        $mail->addReplyTo('info@example.com', 'Information');
        

        //Content 
        $mail->isHTML(true);  //Set email format to HTML
        $mail->Subject = 'Token Voting Ketua ASSETS 2022!';
        $mail->Body    = 'Halo warga TRPL! Silahkan menggunakan token <b>'.$token[0]->token.'</b> pada laman www.google.com';    
        $mail->send();

        return redirect('/home/voter')->with('pesan', 'Email berhasil dikirim!');
    }

    public function sendEmailAll(){
        $email = Token::all();
        foreach($email as $m){
        $mail = new PHPMailer(true);
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;  
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'mail.learnwithacruz.my.id';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'buatassets@learnwithacruz.my.id';                     //SMTP username
        $mail->Password   = 'Assets20202021';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;  
        //Recipients
        
        $mail->setFrom('buatassets@learnwithacruz.my.id', 'ASSETS UGM');     //Add a recipient
        $mail->addAddress($m->email);               //Name is optional
        
        //Content 
        $mail->isHTML(true);  //Set email format to HTML
        $mail->Subject = 'Token Voting Ketua ASSETS 2022!';
        $mail->Body    = 'Halo warga TRPL! Silahkan menggunakan token <b>'.$m->token.'</b> pada laman www.google.com';    
        $mail->send();
        }
        return redirect('/home/voter')->with('pesan', 'SEMUA Email berhasil dikirim!');
    }   
}   

function getToken(){
    $char = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $token = '';

    for ($i=0; $i < 6; $i++){
        $index = rand(0, strlen($char)-1);
        $token .= $char[$index];
    }
    return $token;
}



