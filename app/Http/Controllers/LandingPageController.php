<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function tentang(){
        return view('/tentang');
    }

    public function struktur(){
        return view('/struktur');
    }

    public function news(){
        return view('/news');
    }

    public function testimoni(){
        return view('/testimoni');
    }

    public function newstruktur(){
        return view('/struktur2');
    }

    public function galeri(){
        return view('/galeri');
    }
}
