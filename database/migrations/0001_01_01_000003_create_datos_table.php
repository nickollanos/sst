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
        Schema::create('datos', function (Blueprint $table) {
            $table->id();
            $table->string('ano');
            $table->string('mes');
            $table->string('trabajadores');
            $table->string('administrativos');
            $table->string('operativos');
            $table->string('actos_inseguros');
            $table->string('condiciones_inseguras');
            $table->string('accidentes');
            $table->string('accidentes_administrativos');
            $table->string('accidentes_operativos');
            $table->string('accidentes_otros');
            $table->string('incidentes');
            $table->string('incidentes_administrativos');
            $table->string('incidentes_operativos');
            $table->string('incidentes_otros');
            $table->string('indice_severidad');
            $table->string('indice_frecuencia');
            $table->string('indice_accidentabilidad');
            $table->string('covid_positivos');
            $table->string('inspecciones_programadas');
            $table->string('inspecciones_ejecutadas');
            $table->string('capacitaciones_programadas');
            $table->string('capacitaciones_ejecutadas');
            $table->string('simulacros_programados');
            $table->string('simulacros_ejecutados');
            $table->string('PASST_programados');
            $table->string('PASST_ejecutados');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datos');
    }
};
