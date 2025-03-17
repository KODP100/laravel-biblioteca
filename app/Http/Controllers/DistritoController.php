<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distrito;

class DistritoController extends Controller
{
    // Listar todos los distritos
    public function index()
    {
        $distritos = Distrito::with('municipio')->get();
        return response()->json($distritos);
    }

    // Crear un nuevo distrito
    public function store(Request $request)
    {
        $request->validate([
            'nombre_distrito' => 'required|string|max:255',
            'id_municipio' => 'required|exists:municipios,id_municipio',
        ]);

        $distrito = Distrito::create($request->all());
        return response()->json($distrito, 201);
    }

    // Mostrar un distrito especifico
    public function show($id)
    {
        $distrito = Distrito::with('municipio')->findOrFail($id);
        return response()->json($distrito);
    }

    // Actualizar un distrito
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_distrito' => 'required|string|max:255',
            'id_municipio' => 'required|exists:municipios,id_municipio',
        ]);

        $distrito = Distrito::findOrFail($id);
        $distrito->update($request->all());
        return response()->json($distrito);
    }

    // Eliminar un distrito
    public function destroy($id)
    {
        $distrito = Distrito::findOrFail($id);
        $distrito->delete();
        return response()->json(null, 204);
    }
}
