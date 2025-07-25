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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('genre_id')->constrained()->onDelete('cascade');
            $table->integer('year');
            $table->integer('duration'); 
            $table->string('language');
            $table->string('poster_url')->nullable();
            $table->text('description')->nullable();
            $table->string('trailer_url')->nullable();
            $table->string('age_rating')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
