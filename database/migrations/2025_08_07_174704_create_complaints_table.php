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
    Schema::create('complaints', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id'); // to relate to logged-in user
        $table->string('latitude');
        $table->string('longitude');
        $table->string('ward');
        $table->text('remarks')->nullable();
        $table->string('image');
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
