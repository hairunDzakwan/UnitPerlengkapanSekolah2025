<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('deskripsi')->nullable();
            $table->integer('harga');
            $table->string('gambar')->nullable(); // Untuk menyimpan path gambar
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('produks');
    }
};
