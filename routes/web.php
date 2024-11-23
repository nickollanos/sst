<?php

use App\Http\Controllers\DatosController;
use App\Models\Datos;
use App\Models\Fechas;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $datos  = Datos::all();
    $fechas = Fechas::all();
    foreach ($fechas as $fecha){
        $fecha   = Carbon::parse($fecha->ultimo_accidente);
        $fechaActual = Carbon::now();
        $dias        = (int) $fecha->diffInDays($fechaActual);
        }
    return view('dashboard')->with('datos', $datos)
                            ->with('dias', $dias);
});

// Route::get('datos', function() {
//     return view('show');
// });

Route::get('updatefecha', function() {
    return view('updatefecha');
});

Route::get('create', function() {
    return view('create');
});

Route::post('/updateFecha', [DatosController::class, 'updateFecha'])->name('datos.updateFecha');

// Route::get('datos/updatefecha', function() {
//     'datos'  => DatosController::class;
// });


Route::resources([
    'datos'  => DatosController::class,
]);

// Route::post('datos/updatefecha', [DatosController::class, 'updateFecha']);
