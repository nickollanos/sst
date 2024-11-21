<?php

use App\Http\Controllers\DatosController;
use App\Models\Datos;
use App\Models\Fechas;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $datos  = Datos::all();
    $fechas = Fechas::all();
    return view('dashboard')->with('datos', $datos)
                            ->with('fechas', $fechas);
});

Route::get('/filtrar-datos', function(Request $request) {
    $ano = $request->query('ano');
    $mes = $request->query('mes');

    $datos = Datos::when($ano,
    function($query, $ano) {
        return $query->where('ano', $ano);
    })->when($mes, function($query, $mes) {
        return $query->where('mes', $mes);
    })->get();

    $fechas = Fechas::all();
    return view('dashboard')->with('datos', $datos)
                            ->with('fechas', $fechas);
});
