<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('detail_periksas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_periksa')->constrained('periksas')->onDelete('cascade');
            $table->foreignId('id_obat')->nullable()->constrained('obats');
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_periksas');
    }
};
