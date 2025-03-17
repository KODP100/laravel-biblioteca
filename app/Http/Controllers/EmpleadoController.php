<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    // Listar todos los empleados
    public function index()
    {
        $empleados = Empleado::with('rol', 'departamento', 'usuario')->get();
        return response()->json($empleados);
    }

    // Crear un nuevo empleado
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'id_rol' => 'required|exists:roles,id_rol',
            'id_departamento' => 'required|exists:departamentos,id_departamento',
            'edad' => 'required|integer',
            'telefono' => 'required|string|max:15',
            'id_municipio' => 'required|exists:municipios,id_municipio',
            'id_distrito' => 'required|exists:distritos,id_distrito',
            'id_usuario' => 'required|exists:usuarios,id_usuario',
            'direccion' => 'required|string|max:255',
        ]);

        $empleado = Empleado::create($request->all());
        return response()->json($empleado, 201);
    }

    // Mostrar un empleado especifico
    public function show($id)
    {
        $empleado = Empleado::with('rol', 'departamento', 'usuario')->findOrFail($id);
        return response()->json($empleado);
    }

    // Actualizar un empleado
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'id_rol' => 'required|exists:roles,id_rol',
            'id_departamento' => 'required|exists:departamentos,id_departamento',
            'edad' => 'required|integer',
            'telefono' => 'required|string|max:15',
            'id_municipio' => 'required|exists:municipios,id_municipio',
            'id_distrito' => 'required|exists:distritos,id_distrito',
            'id_usuario' => 'required|exists:usuarios,id_usuario',
            'direccion' => 'required|string|max:255',
        ]);

        $empleado = Empleado::findOrFail($id);
        $empleado->update($request->all());
        return response()->json($empleado);
    }

    // Eliminar un empleado
    public function destroy($id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->delete();
        return response()->json(null, 204);
    }
}
