<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Rol;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\Cast\Array_;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all();
        foreach ($usuarios as $usuario) {
            $persona = Persona::where('id', $usuario->id_personas)->get('primernombre');
            $rol = Rol::where('id', $usuario->id_rol)->get('rol');
            if ($persona->isNotEmpty()) {
                $usuario->id_personas = $persona[0]['primernombre'];
            }
            if ($rol->isNotEmpty()) {
                $usuario->id_rol = $rol[0]['rol'];
            }
        }
        return $usuarios;
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

        $usuario = new Usuario();
        $usuario->id_personas = $request->id_personas;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->input('password'));
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
        $usuarios = Usuario::find($id);
        $persona = Persona::where('id', $usuarios->id_personas)->get('primernombre');
        $rol = Rol::where('id', $usuarios->id_rol)->get('rol');
        if ($persona->isNotEmpty()) {
            $usuarios->id_personas = $persona[0]['primernombre'];
        }
        if ($rol->isNotEmpty()) {
            $usuarios->id_rol = $rol[0]['rol'];
        }
        return $usuarios;
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
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->input('password'));
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
