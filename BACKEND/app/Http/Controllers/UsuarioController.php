<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Usuario::all();
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
        $usuario = New Usuario();
        $usuario->id_personas = $request->id_personas;
        $usuario->usuario = $request->usuario;
        $usuario->clave = $request->clave;
        $usuario->habilitado = $request->habilitado;
        $usuario->fecha = $request->fecha;
        $usuario->id_rol = $request->id_rol;
        $usuario->usuario_creacion = $request->usuario_creacion;
        $usuario->usuario_modificacion = $request->usuario_modificacion;
        $usuario->save();
        return "Guardado exitoso";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Usuario::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->id_personas = $request->id_personas;
        $usuario->usuario = $request->usuario;
        $usuario->clave = $request->clave;
        $usuario->habilitado = $request->habilitado;
        $usuario->fecha = $request->fecha;
        $usuario->id_rol = $request->id_rol;
        $usuario->usuario_creacion = $request->usuario_creacion;
        $usuario->usuario_modificacion = $request->usuario_modificacion;
        $usuario->save();
        return "Actualizado exitoso";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return "Eliminado exitoso";
    }
}
