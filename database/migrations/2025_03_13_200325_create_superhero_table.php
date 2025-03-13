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
        Schema::create('superhero', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('universe_id');
            $table->foreign('universe_id') ->references('id')->on('universes');
            $table->unsignedBigInteger('gender_id');
            $table->foreign('gender_id') ->references('id')->on('gender');
            $table->string('name', 50 );
            $table->string('real_name',50);
            $table->string('picture');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('superheroes');
    }
};
