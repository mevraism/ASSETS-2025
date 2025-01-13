<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function setan_alas() {
        return view("detailNews.setan-alas");
    }
    public function pimnas_2023() {
        return view("detailNews.pimnas-2023");
    }
}
