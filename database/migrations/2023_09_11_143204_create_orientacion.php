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
        Schema::create('orientacion', function (Blueprint $table) {
            $table->id();
            $table->string("sector");
            $table->string("titulo");
            $table->unsignedBigInteger('id_clase');
            $table->foreign('id_clase')->references('id')->on('clase')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orientacion');
    }
};
