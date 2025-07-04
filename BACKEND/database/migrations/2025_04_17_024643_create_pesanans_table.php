<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('produks_id')->constrained('produks')->onDelete('cascade');
            $table->string('ukuran')->nullable();
            $table->integer('jumlah');
            $table->decimal('total_harga', 10, 2);
            $table->enum('status', ['Belum Bayar', 'menunggu_pembatalan', 'Diproses', 'Dikirim', 'Selesai', 'Dibatalkan'])->default('Belum Bayar');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
