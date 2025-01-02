<?php

namespace App\Http\Controllers;
use App\Models\Voter;
use Illuminate\Http\Request;

class API extends Controller
{
    public function index()
    {
        $data = Voter::all();
        return response([
            'success' => true,
            'message' => 'isi semua voter',
            'data' => $data
        ], 200);
    }
}
