<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datos extends Model
{
    use HasFactory;
        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ano',
        'mes',
        'trabajadores',
        'administrativos',
        'operativos',
        'actos_inseguros',
        'condiciones_inseguras',
        'accidentes',
        'accidentes_administrativos',
        'accidentes_operativos',
        'accidentes_otros',
        'incidentes',
        'incidentes_administrativos',
        'incidentes_operativos',
        'incidentes_otros',
        'indice_severidad',
        'indice_frecuencia',
        'indice_accidentabilidad',
        'covid_positivos',
        'inspecciones_programadas',
        'inspecciones_ejecutadas',
        'capacitaciones_programadas',
        'capacitaciones_ejecutadas',
        'simulacros_programados',
        'simulacros_ejecutados',
        'PASST_programados',
        'PASST_ejecutados',
    ];
}
