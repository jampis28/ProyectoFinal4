<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Rol::all();
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
        $rol = New Rol();
        $rol->rol = $request->rol;
        $rol->usuario_creacion = $request->usuario_creacion;
        $rol->usuario_modificacion = $request->usuario_modificacion;
        $rol->save();
        return "Guardado exitoso";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Rol::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rol $rol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rol = Rol::find($id);
        $rol->rol = $request->rol;
        $rol->usuario_creacion = $request->usuario_creacion;
        $rol->usuario_modificacion = $request->usuario_modificacion;
        $rol->save();
        return "Actualizado exitoso";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $rol = Rol::find($id);
        $rol->delete();
        return "Eliminado exitoso";
    }
}
