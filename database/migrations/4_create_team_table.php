<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('team', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->tinyInteger('titles')->default(0);
            $table->foreignId('city_id')->references('id')->on('cities');
            $table->foreignId('division_id')->references('id')->on('divisiones');
            $table->foreignId('conference_id')->references('id')->on('conferencias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team');
    }
};
