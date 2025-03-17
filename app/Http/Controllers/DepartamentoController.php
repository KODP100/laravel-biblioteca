<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;

class DepartamentoController extends Controller
{
    // Listar todos los departamentos
    public function index()
    {
        $departamentos = Departamento::all();
        return response()->json($departamentos);
    }

    // Crear un nuevo departamento
    public function store(Request $request)
    {
        $request->validate([
            'nombre_departamento' => 'required|string|max:255',
        ]);

        $departamento = Departamento::create($request->all());
        return response()->json($departamento, 201);
    }

    // Mostrar un departamento especifico
    public function show($id)
    {
        $departamento = Departamento::findOrFail($id);
        return response()->json($departamento);
    }

    // Actualizar un departamento
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre_departamento' => 'required|string|max:255',
        ]);

        $departamento = Departamento::findOrFail($id);
        $departamento->update($request->all());
        return response()->json($departamento);
    }

    // Eliminar un departamento
    public function destroy($id)
    {
        $departamento = Departamento::findOrFail($id);
        $departamento->delete();
        return response()->json(null, 204);
    }
}
