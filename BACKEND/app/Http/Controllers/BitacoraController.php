<?php

namespace App\Http\Controllers;

use App\Models\Bitacora;
use Illuminate\Http\Request;

class BitacoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Bitacora::all();
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
        $bitacora = New Bitacora();
        $bitacora->bitacora = $request->bitacora;
        $bitacora->id_usuario = $request->id_usuario;
        $bitacora->fecha = $request->fecha;
        $bitacora->hora = $request->hora;
        $bitacora->ip = $request->ip;
        $bitacora->so = $request->so;
        $bitacora->navegador = $request->navegador;
        $bitacora->usuario = $request->usuario;
        $bitacora->save();
        return "Guardado exitoso";

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Bitacora::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bitacora $bitacora)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $bitacora = Bitacora::find($id);
        $bitacora->bitacora = $request->bitacora;
        $bitacora->id_usuario = $request->id_usuario;
        $bitacora->fecha = $request->fecha;
        $bitacora->hora = $request->hora;
        $bitacora->ip = $request->ip;
        $bitacora->so = $request->so;
        $bitacora->navegador = $request->navegador;
        $bitacora->usuario = $request->usuario;
        $bitacora->save();
        return "Actualizado exitoso";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bitacora = Bitacora::find($id);
        $bitacora->delete();
        return "Eliminado exitoso"; 
    }
}
