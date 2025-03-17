<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;

class RolController extends Controller
{
    // Listar todos los roles
    public function index()
    {
        $roles = Rol::all();
        return response()->json($roles);
    }

    // Crear un nuevo rol
    public function store(Request $request)
    {
        $request->validate([
            'nombre_rol' => 'required|string|max:255',
        ]);

        $rol = Rol::create($request->all());
        return response()->json($rol, 201);
    }

    // Mostrar un rol especifico
    public function show($id)
    {
        $rol = Rol::findOrFail($id);
        return response()->json($rol);
    }

    // Actualizar un rol
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_rol' => 'required|string|max:255',
        ]);

        $rol = Rol::findOrFail($id);
        $rol->update($request->all());
        return response()->json($rol);
    }

    // Eliminar un rol
    public function destroy($id)
    {
        $rol = Rol::findOrFail($id);
        $rol->delete();
        return response()->json(null, 204);
    }
}
