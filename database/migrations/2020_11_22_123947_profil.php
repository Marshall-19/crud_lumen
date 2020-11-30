<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Profil extends Migration
{
    public function up()
    {
        Schema::create('profil', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('photo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profil');
    }
}
