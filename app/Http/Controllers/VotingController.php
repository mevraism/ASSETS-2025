<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kandidat;
use App\Models\Token;
use App\Models\Voting;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class VotingController extends Controller
{
    public function index(){
        $kandidat_tabel = Kandidat::all();
        $k = $kandidat_tabel;
        $c = NULL;
        foreach($k as $k){
            $c[$k->no_urut] = DB::table('voting')->where('no_urut', $k->no_urut)->count();
        }
        return view('login/voting', compact('kandidat_tabel', 'c'));
    }

    public function livecount(){
        $p = DB::table('pengaturan')->latest('created_at')->first();
        if (Carbon::now()->between(Carbon::parse($p->dt_mulai), Carbon::parse($p->dt_akhir))){
        $kandidat_tabel = Kandidat::all();
        $k = $kandidat_tabel;
        $c = NULL;
        foreach($k as $k){
            $c[$k->no_urut] = DB::table('voting')->where('no_urut', $k->no_urut)->count();
        }
        return view('login/livecount', compact('kandidat_tabel', 'c'));
        }
        else{
            return redirect('/')->with('invalids', 'error');
        }
    }

    public function sync(Request $req){
        $token = Token::all();
        $p = DB::table('pengaturan')->latest('created_at')->first();
        if ($p != null){
        foreach ($token as $tkn){
            if ($req->token == $tkn->token and Carbon::now()->between(Carbon::parse($p->dt_mulai), Carbon::parse($p->dt_akhir))){
                return redirect('/vote')->with('token', $tkn->token);
            }
        }
        }
        return redirect('/')->with('invalid', 'error');
    }

    public function submit(Request $req, $tkn){
        $vote = new Voting;
        $data = DB::table('token_tabel')->where('token','=',$tkn)->get();
        $data_token = $data[0]->email;
        $data_voter = DB::table('voter')->where('email','=',$data_token)->get();
        $akt_voter = $data_voter[0]->angkatan;

        $vote->no_urut = $req->no;
        $vote->angkatan = $akt_voter;
        $vote->created_at = NULL;
        $vote->updated_at = NULL;
        $vote->save();

        DB::table('token_tabel')->where('token', '=', $tkn)->delete();
        return redirect('/')->with('alert', 'Berhasil Memilih!');
    }

    public function delete(){
        Voting::truncate();
        return redirect('/home/pengaturan')->with('pesan', 'semua data voting berhasil dihapus');
    }
}
