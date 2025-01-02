<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pengaturan extends Migration
{
    public function up()
    {
        Schema::create('pengaturan', function (Blueprint $table) {
            $table->bigIncrements('no_sesi');
            $table->string('nama_kegiatan');
            $table->datetime('dt_mulai');
            $table->datetime('dt_akhir');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExist('pengaturan');
    }
}
