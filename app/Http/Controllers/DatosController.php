<?php

namespace App\Http\Controllers;

use App\Models\Datos;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DatosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Datos::all();
        return view('dashboard')->with('datos', $datos);
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
     * Remove the specified resource from storage.
     */
    public function destroy(Datos $datos)
    {
        //
    }
}
