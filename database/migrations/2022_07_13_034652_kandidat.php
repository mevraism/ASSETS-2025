<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kandidat extends Migration
{
    public function up()
    {
        //
        Schema::create('kandidat', function (Blueprint $table) {
            $table->integer('no_urut')->primary()->unique();
            $table->string('nama');
            $table->string('foto');
            $table->string('nim');
            $table->string('angkatan');
            $table->text('visi');
            $table->text('misi');

            $table->timestamps();
        });
    }

    public function down()
    {
        //
        Schema::dropIfExist('kandidat');
    }
}
