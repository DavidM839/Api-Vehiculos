<?php

namespace App\Http\Controllers;

use App\Models\vehiculos; 
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index()
    {
        $vehiculos = vehiculos::all(); // Usar el nombre del modelo correctamente
        return response()->json($vehiculos, 200);
    }

    public function show($id)
    {
        $vehiculo = vehiculos::find($id); // Usar el nombre del modelo correctamente

        if (!$vehiculo) {
            return response()->json(['message' => 'Vehículo no encontrado'], 404);
        }

        return response()->json($vehiculo, 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'marca' => 'required|string',
            'modelo' => 'required|string',
            'anio' => 'required|integer',
            'precio' => 'required|numeric',
            'tipoVehiculo' => 'required|string|max:150', // Utilizando la longitud máxima definida en la migración
            'estado' => 'required|string|max:20', // Utilizando la longitud máxima definida en la migración
        ]);

        $vehiculo = vehiculos::create($validatedData);

        return response()->json($vehiculo, 201);
    }

    public function update(Request $request, $id)
    {
        $vehiculo = vehiculos::find($id);

        if (!$vehiculo) {
            return response()->json(['message' => 'Vehículo no encontrado'], 404);
        }

        $validatedData = $request->validate([
            'marca' => 'required|string',
            'modelo' => 'required|string',
            'anio' => 'required|integer',
            'precio' => 'required|numeric',
            'tipoVehiculo' => 'required|string|max:150', // Utilizando la longitud máxima definida en la migración
            'estado' => 'required|string|max:20', // Utilizando la longitud máxima definida en la migración
        ]);

        $vehiculo->update($validatedData);

        return response()->json($vehiculo, 200);
    }

    public function destroy($id)
    {
        $vehiculo = vehiculos::find($id);

        if (!$vehiculo) {
            return response()->json(['message' => 'Vehículo no encontrado'], 404);
        }

        $vehiculo->delete();

        return response()->json(['message' => 'Vehículo eliminado'], 200);
    }
}
