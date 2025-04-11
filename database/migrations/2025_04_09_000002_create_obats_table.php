<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatsTable extends Migration
{
    public function up()
    {
        Schema::create('obats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name_obat', 50);
            $table->string('kemasan', 50);
            $table->integer('harga')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('obats');
    }
}
