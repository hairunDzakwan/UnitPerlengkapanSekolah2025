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
    Schema::table('prints', function (Blueprint $table) {
        $table->unsignedBigInteger('users_id')->nullable()->after('id');

        $table->foreign('users_id')->references('id')->on('users')->onDelete('set null');
    });
}

public function down()
{
    Schema::table('prints', function (Blueprint $table) {
        $table->dropForeign(['users_id']);
        $table->dropColumn('users_id');
    });
}

};
