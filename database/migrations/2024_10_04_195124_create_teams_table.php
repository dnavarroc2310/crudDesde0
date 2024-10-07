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
        Schema::create('teamsEuropa', function(Blueprint $table){

            $table->id();
            $table->String('nombre');
            $table->integer('Fundacion');
            $table->String('City');
            $table->string('pais');
            $table->string('estadio');
            $table->integer('ligasGanadas');
            $table->integer('copasGanadasLocales');
            $table->integer('championsGanadas');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teamsEuropa');
    }
};
