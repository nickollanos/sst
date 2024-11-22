<?php

namespace App\Http\Controllers;

use App\Models\Datos;
use App\Models\Fechas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DatosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $ano = $request->query('ano');
        $mes = $request->query('mes');

        $datos = Datos::where('ano', $ano)->where('mes', $mes)->get();

        if($datos->count() > 0){
            $fechas = Fechas::all();
            foreach ($fechas as $fecha){
            $fecha       = Carbon::parse($fecha->ultimo_accidente);
            $fechaActual = Carbon::now();
            $dias        = (int) $fecha->diffInDays($fechaActual);
            }

            $anos   = Datos::distinct()->pluck('ano');

            return view('show')->with('datos', $datos)
                               ->with('dias', $dias)
                               ->with('anos', $anos);
        }else {
            $datos  = Datos::all();
            $fechas = Fechas::all();
            foreach ($fechas as $fecha){
            $fecha   = Carbon::parse($fecha->ultimo_accidente);
            $fechaActual = Carbon::now();
            $dias        = (int) $fecha->diffInDays($fechaActual);
            }
            session()->flash('message', 'Este año y este mes no tienen ningun datos almacenado');
            return view('dashboard')->with('datos', $datos)
                                    ->with('dias', $dias);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //cambiiar datos que se van a ingresar en el formulario de creacion
        $datos = new Datos;
        $datos->document = $request->document;
        $datos->fullname = $request->fullname;
        $datos->gender = $request->gender;
        $datos->birthdate = $request->birthdate;
        $datos->photo = $request->photo;
        $datos->phone = $request->phone;
        $datos->email = $request->email;
        $datos->password = bcrypt($request->password);

        if($datos->save()){
            return redirect('dashboard')
                    ->with('message' . 'The datos: ' . $datos->fullname . ' was successfully added!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Datos $datos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Datos $datos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Datos $datos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateFecha(Request $request)
    {
        $fecha = $request->input('fecha');

        $validatedData = Validator::make($request->all(), ['fecha' => 'required|date',]);

        if($validatedData->fails()){
            // session()->flash('message', 'Este año y este mes no tienen ningun datos almacenado');
            return redirect(route('datos.index'))->withErrors($validatedData)->withInput();
        }

        $fechaModel = Fechas::find(1);
        $fechaModel->ultimo_accidente = $fecha;
        $fechaModel->save();

        return redirect(route('datos.index'))->with('message', 'Fecha actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Datos $datos)
    {
        //
    }
}
