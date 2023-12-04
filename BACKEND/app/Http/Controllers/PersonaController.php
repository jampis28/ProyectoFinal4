<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Persona::all();
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
        $persona = New Persona();
        $persona->primernombre = $request->primernombre;
        $persona->segundonombre = $request->segundonombre;
        $persona->primerapellido = $request->primerapellido;
        $persona->segundoapellido = $request->segundoapellido;
        $persona->usuario_creacion = $request->usuario_creacion;
        $persona->usuario_modificacion = $request->usuario_modificacion;
        $persona->save();
        return "Guardado exitoso";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Persona::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $persona = Persona::find($id);
        $persona->primernombre = $request->primernombre;
        $persona->segundonombre = $request->segundonombre;
        $persona->primerapellido = $request->primerapellido;
        $persona->segundoapellido = $request->segundoapellido;
        $persona->usuario_creacion = $request->usuario_creacion;
        $persona->usuario_modificacion = $request->usuario_modificacion;
        $persona->save();
        return "Actualizado exitoso";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $persona = Persona::find($id);
        $persona->delete();
        return "Eliminado exitoso";
    }
}
