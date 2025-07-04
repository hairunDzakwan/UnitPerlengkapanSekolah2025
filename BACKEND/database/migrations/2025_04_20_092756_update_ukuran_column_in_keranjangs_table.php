<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // database/migrations/xxxx_xx_xx_update_ukuran_column_in_keranjangs_table.php
public function up(): void
{
    Schema::table('keranjangs', function (Blueprint $table) {
        $table->text('ukuran')->change(); // ubah jadi text jika sebelumnya string
    });
}

public function down(): void
{
    Schema::table('keranjangs', function (Blueprint $table) {
        $table->string('ukuran', 255)->change(); // revert jika rollback
    });
}

};
