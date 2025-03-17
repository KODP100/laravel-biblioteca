<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EstadoUsuario;

class EstadoUsuarioController extends Controller
{
    // Listar todos los estados de usuarios
    public function index()
    {
        $estados = EstadoUsuario::all();
        return response()->json($estados);
    }

    // Crear un nuevo estado de usuario
    public function store(Request $request)
    {
        $request->validate([
            'estado_usuario' => 'required|string|max:255',
        ]);

        $estado = EstadoUsuario::create($request->all());
        return response()->json($estado, 201);
    }

    // Mostrar un estado de usuario especifico
    public function show($id)
    {
        $estado = EstadoUsuario::findOrFail($id);
        return response()->json($estado);
    }

    // Actualizar un estado de usuario
    public function update(Request $request, $id)
    {
        $request->validate([
            'estado_usuario' => 'required|string|max:255',
        ]);

        $estado = EstadoUsuario::findOrFail($id);
        $estado->update($request->all());
        return response()->json($estado);
    }

    // Eliminar un estado de usuario
    public function destroy($id)
    {
        $estado = EstadoUsuario::findOrFail($id);
        $estado->delete();
        return response()->json(null, 204);
    }
}
