<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Kandidat;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use File;

class KandidatController extends Controller
{
    public function index(){
        $batas = 4;
        $kandidat_tabel = Kandidat::orderBy('no_urut', 'asc')->paginate(3);

        return view('login/kandidat', compact('kandidat_tabel'));
    }

    public function tambah(Request $req){
        $kandidat = new Kandidat;
        // $this->validate($req,[
        //     'no_urut' => 'required',
        //     'nama'     => 'required|string',
        //     'nim'   => 'required',
        //     'angkatan'  => 'required|numeric',
        //     'foto'  => 'required|image|mimes:jpeg,jpg,png',
        //     'visi'  => 'required',
        //     'misi'  => 'required'
        // ]);
        $kandidat->no_urut = $req->nomor;
        $kandidat->nama = $req->nama;

        $foto = $req->foto;
        $namafile = time().'.'. $foto->getClientOriginalExtension();
        Image::make($foto)->resize(300,400)->encode('jpg')->save('thumb/'.$namafile);
        $foto->move('images/', $namafile);
        $kandidat->foto = $namafile;

        $kandidat->nim = $req->nim;
        $kandidat->angkatan = $req->angkatan;
        $kandidat->visi = $req->visi;
        $kandidat->misi = $req->misi;
        $kandidat->created_at = NULL;
        $kandidat->updated_at = NULL;
        $kandidat->save();

        return redirect('/home/kandidat')->with('pesan', 'Kandidat Berhasil ditambahkan!');
    }

    public function delete($req){
        DB::table('kandidat')->where('no_urut', '=', $req)->delete();
        
        return redirect('/home/kandidat')->with('pesan', 'Kandidat Berhasil dihapus!');

    }

    public function update(Request $requ, $req){
        Kandidat::where('no_urut', $req)->update(['nama' => $requ->nama]);
        Kandidat::where('no_urut', $req)->update(['nim' => $requ->nim]);
        Kandidat::where('no_urut', $req)->update(['angkatan' => $requ->angkatan]);
        Kandidat::where('no_urut', $req)->update(['visi' => $requ->visi]);
        Kandidat::where('no_urut', $req)->update(['misi' => $requ->misi]);

        return redirect('/home/kandidat')->with('pesan', 'Data berhasil diupdate!');
    }
}
