<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained()->onDelete('cascade'); // Relasi ke user
            $table->foreignId('produks_id')->constrained()->onDelete('cascade'); // Relasi ke produk
            $table->integer('jumlah'); // Jumlah produk yang dipesan
            $table->decimal('total_harga', 10, 2); // Total harga pesanan
            $table->enum('status', ['Belum Bayar', 'Dikemas', 'Dikirim', 'Selesai', 'Dibatalkan'])->default('Belum Bayar'); // Status pesanan
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pesanans');
    }
};

