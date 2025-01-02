<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaturan;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PengaturanController extends Controller
{
    public function index(){
        $pgt = Pengaturan::all();

        return view('login/pengaturan', compact('pgt'));
    }

    public function tambah(Request $req){

        $pg = new Pengaturan;
        $pg->nama_kegiatan = $req->namakeg;
        $pg->dt_mulai = $req->start;
        $pg->dt_akhir = $req->end;
        $pg->created_at = Carbon::now();
        $pg->updated_at = NULL;
        $pg->save();

        return redirect('/home/pengaturan')->with('pesan', 'pengaturan berhasil ditambah');
    }

    public function delete($req){
        DB::table('pengaturan')->where('no_sesi', '=', $req)->delete();
        return redirect('/home/pengaturan')->with('pesan', 'pengaturan berhasil dihapus');
    }

    public function update(Request $requ, $req){
        Pengaturan::where('no_sesi', $req)->update(['nama_kegiatan' => $requ->namakeg]);
        Pengaturan::where('no_sesi', $req)->update(['dt_mulai' => $requ->start]);
        Pengaturan::where('no_sesi', $req)->update(['dt_akhir' => $requ->end]);

        return redirect('/home/pengaturan')->with('pesan', 'update data berhasil');
    }
}
