<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailDivisiController extends Controller
{
    //
    public function kastrad(){
        return view("detailDivisi.kastrad");
    }
    public function humas(){
        return view("detailDivisi.humas");
    }
    public function minkat(){
        return view("detailDivisi.minkat");
    }
    public function psdm(){
        return view("detailDivisi.psdm");
    }
    public function kreatif(){
        return view("detailDivisi.kreatif");
    }
    public function pengurus_harian(){
        return view("detailDivisi.ph");
    }

}
