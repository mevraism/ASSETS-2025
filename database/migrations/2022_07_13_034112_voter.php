<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Voter extends Migration
{
    public function up()
    {
        //
        Schema::create('voter', function (Blueprint $table) {
            $table->string('email')->primary()->unique();
            $table->string('nim');
            $table->string('angkatan');
            $table->boolean('status')->default('0');
            $table->timestamps();
        });

        
    }


    public function down()
    {
        //
        Schema::dropIfExists('voter');
    }
}
