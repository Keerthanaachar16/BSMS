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
    Schema::table('complaints', function (Blueprint $table) {
        $table->unsignedBigInteger('raised_by')->nullable()->after('id');

        // Optional: link to users table
        $table->foreign('raised_by')->references('id')->on('users')->onDelete('cascade');
    });
}

public function down()
{
    Schema::table('complaints', function (Blueprint $table) {
        $table->dropForeign(['raised_by']);
        $table->dropColumn('raised_by');
    });
}
};
