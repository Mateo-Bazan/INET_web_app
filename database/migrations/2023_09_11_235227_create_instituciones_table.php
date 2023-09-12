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
        Schema::create('instituciones', function (Blueprint $table) {
            $table->id();
            $table->String('cue');
            $table->unsignedBigInteger('id_ubicacion');
            $table->foreign('id_ubicacion')->references('id')->on('ubicacion')->onDelete('cascade');

            $table->unsignedBigInteger('id_oferta');
            $table->foreign('id_oferta')->references('id')->on('oferta')->onDelete('cascade');

            $table->unsignedBigInteger('id_orientacion');
            $table->foreign('id_orientacion')->references('id')->on('orientacion')->onDelete('cascade');

            $table->unsignedBigInteger('id_contacto');
            $table->foreign('id_contacto')->references('id')->on('contacto')->onDelete('cascade');

            $table->Integer('matricula');
            $table->String('nombre');
            $table->Boolean('aula_taller');
            $table->Boolean('gestion');

            $table->unsignedBigInteger('id_dependencia');
            $table->foreign('id_dependencia')->references('id')->on('dependencia')->onDelete('cascade');

            $table->unsignedBigInteger('id_modalidad');
            $table->foreign('id_modalidad')->references('id')->on('modalidad')->onDelete('cascade');

            $table->String('nivel_educativo');
            $table->Boolean('albergue');
            $table->Boolean('centro_estudiantes');
            $table->datetime('actualizacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instituciones');
    }
};
