<?php

namespace App\Http\Controllers;

use App\Models\vehiculos; 
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index()
    {
        // Mostrar una lista de vehículos
        $vehiculos = vehiculos::all(); // Usar el nombre del modelo correctamente
        return response()->json($vehiculos, 200);
    }

    public function show($id)
    {
        // Mostrar un vehículo específico por su ID
        $vehiculo = vehiculos::find($id); // Usar el nombre del modelo correctamente
        
        if (!$vehiculo) {
            return response()->json(['message' => 'Vehículo no encontrado'], 404);
        }

        return response()->json($vehiculo, 200);
    }

    public function store(Request $request)
    {
        // Crear un nuevo vehículo
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'anio' => 'required',
            'precio' => 'required',
            'tipoVehiculo' => 'required',
            'estado' => 'required',
        ]);

        $vehiculo = vehiculos::create($request->all()); // Usar el nombre del modelo correctamente

        return response()->json($vehiculo, 201);
    }

    public function update(Request $request, $id)
    {
        // Actualizar un vehículo existente
        $vehiculo = vehiculos::find($id); // Usar el nombre del modelo correctamente

        if (!$vehiculo) {
            return response()->json(['message' => 'Vehículo no encontrado'], 404);
        }

        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'anio' => 'required',
            'precio' => 'required',
            'tipoVehiculo' => 'required',
            'estado' => 'required',
        ]);

        $vehiculo->update($request->all());

        return response()->json($vehiculo, 200);
    }

    public function destroy($id)
    {
        // Eliminar un vehículo por su ID
        $vehiculo = vehiculos::find($id); // Usar el nombre del modelo correctamente

        if (!$vehiculo) {
            return response()->json(['message' => 'Vehículo no encontrado'], 404);
        }

        $vehiculo->delete();

        return response()->json(['message' => 'Vehículo eliminado'], 200);
    }
}
