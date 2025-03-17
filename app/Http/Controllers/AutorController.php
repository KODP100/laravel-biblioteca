<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    // Listar todos los autores
    public function index()
    {
        $autores = Autor::with('libros', 'editorial')->get();
        return response()->json($autores);
    }

    // Crear un nuevo autor
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'nacionalidad' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'id_editorial' => 'required|exists:editoriales,id_editorial',
            'edad' => 'required|integer',
            'sexo' => 'required|string|max:1',
        ]);

        $autor = Autor::create($request->all());
        return response()->json($autor, 201);
    }

    // Mostrar un autor especifico
    public function show($id)
    {
        $autor = Autor::with('libros', 'editorial')->findOrFail($id);
        return response()->json($autor);
    }

    // Actualizar un autor
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'nacionalidad' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'id_editorial' => 'required|exists:editoriales,id_editorial',
            'edad' => 'required|integer',
            'sexo' => 'required|string|max:1',
        ]);

        $autor = Autor::findOrFail($id);
        $autor->update($request->all());
        return response()->json($autor);
    }

    // Eliminar un autor
    public function destroy($id)
    {
        $autor = Autor::findOrFail($id);
        $autor->delete();
        return response()->json(null, 204);
    }
}
