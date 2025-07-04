<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();

            // Relasi ke tabel users
            $table->foreignId('users_id')->constrained()->onDelete('cascade');

            // Relasi ke tabel produks
            $table->foreignId('produks_id')->constrained()->onDelete('cascade');

            // Detail pesanan
            $table->string('ukuran')->nullable();
            $table->integer('jumlah');
            $table->decimal('total_harga', 10, 2);

            // Status pesanan
            $table->enum('status', [
                'antrian',
                'dikemas',
                'siap_pickup',
                'selesai',
                'menunggu_pembatalan',
                'dibatalkan'
            ])->default('antrian');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pesanans');
    }
};
