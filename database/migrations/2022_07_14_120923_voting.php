<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Voting extends Migration
{
    public function up()
    {
        Schema::create('voting', function(Blueprint $table){
            $table->integer('no_urut');
            $table->foreign('no_urut')->references('no_urut')->on('kandidat');
            $table->string('angkatan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExist('voting');
    }
}
