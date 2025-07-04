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
    Schema::table('keranjangs', function (Blueprint $table) {
        $table->string('ukuran_almamater')->nullable();
        $table->string('ukuran_baju')->nullable();
        $table->string('ukuran_celana')->nullable();
    });
}

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('keranjangs', function (Blueprint $table) {
            //
        });
    }
};
