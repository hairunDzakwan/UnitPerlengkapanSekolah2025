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
        $table->unsignedBigInteger('produks_id')->nullable()->change();
        $table->unsignedBigInteger('prints_id')->nullable()->after('produks_id');

        $table->foreign('prints_id')->references('id')->on('prints')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
