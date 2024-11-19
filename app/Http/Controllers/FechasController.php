<?php

namespace App\Http\Controllers;

use App\Models\Fechas;
use Illuminate\Http\Request;

class FechasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fechas = Fechas::all();
        return view('dashboard')->with('fechas', $fechas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Fechas $fechas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fechas $fechas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fechas $fechas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fechas $fechas)
    {
        //
    }
}
