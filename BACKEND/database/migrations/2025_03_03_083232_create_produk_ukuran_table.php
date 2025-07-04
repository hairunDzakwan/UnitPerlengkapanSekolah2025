<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('produk_ukurans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produks_id')->constrained('produks')->onDelete('cascade');
            $table->string('ukuran'); // Contoh: S, M, L, XL
            $table->integer('stok')->default(0);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('produk_ukurans');
    }
};
