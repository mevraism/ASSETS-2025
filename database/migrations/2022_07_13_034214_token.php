<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Token extends Migration
{
    public function up()
    {
        //
        Schema::create('token_tabel', function (Blueprint $table) {
            $table->string('token');
            $table->string('email');
            $table->foreign('email')->references('email')->on('voter');

            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExist('token_tabel');
    }
}
