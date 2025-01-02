<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Admin extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            'name'  =>  'Admin Assets',
            'email' =>  'assets@ugm.ac.id',
            'password'  =>  Hash::make('tH1s_i5n7-fL4g'),
            'created_at' => Carbon::now(),
        ]);
    }
}
