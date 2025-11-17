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
    Schema::create('complaint_official', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('complaint_id');
        $table->unsignedBigInteger('official_id');
        $table->timestamps();

        $table->foreign('complaint_id')->references('id')->on('complaints')->onDelete('cascade');
        $table->foreign('official_id')->references('id')->on('officials')->onDelete('cascade');
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
