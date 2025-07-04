<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('produk_ukurans', function (Blueprint $table) {
            $table->string('kategori')->default('umum'); // contoh default "umum"
        });
    }
    
    public function down()
    {
        Schema::table('produk_ukurans', function (Blueprint $table) {
            $table->dropColumn('kategori');
        });
    }
    
};
