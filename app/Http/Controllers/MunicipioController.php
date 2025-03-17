<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;

class MunicipioController extends Controller
{
    // Listar todos los municipios
    public function index()
    {
        $municipios = Municipio::with('departamento')->get();
        return response()->json($municipios);
    }

    // Crear un nuevo municipio
    public function store(Request $request)
    {
        $request->validate([
            'nombre_municipio' => 'required|string|max:255',
            'id_departamento' => 'required|exists:departamentos,id_departamento',
        ]);

        $municipio = Municipio::create($request->all());
        return response()->json($municipio, 201);
    }

    // Mostrar un municipio especifico
    public function show($id)
    {
        $municipio = Municipio::with('departamento')->findOrFail($id);
        return response()->json($municipio);
    }

    // Actualizar un municipio
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_municipio' => 'required|string|max:255',
            'id_departamento' => 'required|exists:departamentos,id_departamento',
        ]);

        $municipio = Municipio::findOrFail($id);
        $municipio->update($request->all());
        return response()->json($municipio);
    }

    // Eliminar un municipio
    public function destroy($id)
    {
        $municipio = Municipio::findOrFail($id);
        $municipio->delete();
        return response()->json(null, 204);
    }
}
