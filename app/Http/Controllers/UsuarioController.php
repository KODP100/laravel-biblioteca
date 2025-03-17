<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    // Listar todos los usuarios
    public function index()
    {
        $usuarios = Usuario::with('estado')->get();
        return response()->json($usuarios);
    }

    // Crear un nuevo usuario
    public function store(Request $request)
    {
        $request->validate([
            'usuario' => 'required|string|max:255|unique:usuarios',
            'password' => 'required|string|max:255',
            'id_estado' => 'required|exists:estado_usuarios,id_estado',
        ]);

        $usuario = Usuario::create($request->all());
        return response()->json($usuario, 201);
    }

    // Mostrar un usuario especifico
    public function show($id)
    {
        $usuario = Usuario::with('estado')->findOrFail($id);
        return response()->json($usuario);
    }

    // Actualizar un usuario
    public function update(Request $request, $id)
    {
        $request->validate([
            'usuario' => 'required|string|max:255|unique:usuarios,usuario,' . $id . ',id_usuario',
            'password' => 'required|string|max:255',
            'id_estado' => 'required|exists:estado_usuarios,id_estado',
        ]);

        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());
        return response()->json($usuario);
    }

    // Eliminar un usuario
    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return response()->json(null, 204);
    }
}
