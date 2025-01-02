<?php

namespace App\Http\Controllers;
use App\Models\Pengaturan;
use Illuminate\Http\Request;
use App\Models\Voter;
use App\Models\Kandidat;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $akt = array(2019, 2020, 2021, 2022);
        $x = DB::table('voting')->where('no_urut', 1)->where('angkatan', 2021)->count();
        $xakt = NULL;
        $v = DB::table('voter')->count();
        $v0 = DB::table('voter')->where('status', 0)->count();
        $v1 = $v-$v0;
        
        $p = DB::table('pengaturan')->latest('created_at')->first();

        $kd = Kandidat::all();
        $k = $kd;
        $c = NULL;
        foreach($kd as $kd){
            $c[$kd->no_urut] = DB::table('voting')->where('no_urut', $kd->no_urut)->count();
            foreach($akt as $aktd){
                $xakt[$kd->no_urut][$aktd] = DB::table('voting')->where('no_urut', $kd->no_urut)->where('angkatan', $aktd)->count();
            }
        }
        return view('login/home', compact('k', 'v0', 'v1', 'p', 'c', 'v', 'xakt', 'akt'));
    }
}
