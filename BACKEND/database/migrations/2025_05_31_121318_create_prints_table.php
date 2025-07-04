<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {Schema::create('prints', function (Blueprint $table) {
    $table->id();
    $table->string('nama');           // misalnya "Print Warna A4"
    $table->string('file');           // nama file yang diunggah user
    $table->enum('warna', ['hitam_putih', 'berwarna']);
    $table->integer('harga');         // harga per halaman
    $table->integer('jumlah_halaman');
    $table->integer('jumlah_copy');   // jumlah salinan
    $table->integer('total_harga');   // harga * halaman * copy
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prints');
    }
};
