<?php

use App\Http\Controllers\DatosController;
use App\Models\Datos;
use App\Models\Fechas;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $datos   = Datos::all();
    $fechas = Fechas::all();
    return view('dashboard')->with('datos', $datos)
                            ->with('fechas', $fechas);
});

