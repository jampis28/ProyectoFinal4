<?php

namespace App\Http\Controllers;

use App\Models\Enlace;
use Illuminate\Http\Request;

class EnlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Enlace::all();
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
        $enlace = New Enlace();
        $enlace->id_pagina = $request->id_pagina;
        $enlace->id_rol = $request->id_rol;
        $enlace->description = $request->description;
        $enlace->usuario_creacion = $request->usuario_creacion;
        $enlace->usuario_modificacion = $request->usuario_modificacion;
        $enlace->save();
        return "Guardado exitoso";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Enlace::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enlace $enlace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $enlace = Enlace::find($id);
        $enlace->id_pagina = $request->id_pagina;
        $enlace->id_rol = $request->id_rol;
        $enlace->description = $request->description;
        $enlace->usuario_creacion = $request->usuario_creacion;
        $enlace->usuario_modificacion = $request->usuario_modificacion;
        $enlace->save();
        return "Actualizado exitoso";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $enlace = Enlace::find($id);
        $enlace->delete();
        return "Eliminado exitoso"; 
    }
}
