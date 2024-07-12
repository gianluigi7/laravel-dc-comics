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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 160);
            $table->longText('description')->nullable();
            $table->longText('thumb')->nullable();
            $table->string('price')->nullable();
            $table->string('series', 70)->nullable();
            $table->string('sale_date')->nullable();
            $table->string('type', 20)->nullable();
            $table->string('artists')->nullable();
            $table->string('writers')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
