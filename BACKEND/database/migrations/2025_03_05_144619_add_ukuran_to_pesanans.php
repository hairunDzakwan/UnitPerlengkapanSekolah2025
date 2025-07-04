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
    Schema::table('pesanans', function (Blueprint $table) {
        $table->string('ukuran')->nullable()->after('produks_id');
    });
}

public function down()
{
    Schema::table('pesanans', function (Blueprint $table) {
        $table->dropColumn('ukuran');
    });
}

};
