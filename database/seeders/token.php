<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

function getToken(){
    $char = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $token = '';

    for ($i=0; $i < 6; $i++){
        $index = rand(0, strlen($char)-1);
        $token .= $char[$index];
    }
    return $token;
}

class token extends Seeder
{
    public function run()
    {
        \DB::table('token_tabel')->insert([
            'email' => 'akbar.fajar2301@mail.ugm.ac.id',
            'token'   => getToken(),
        ]);
    }
}
