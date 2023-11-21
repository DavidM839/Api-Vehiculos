<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ventas; 

class VentaController extends Controller
{
    public function index()
    {
        $ventas = ventas::all();
        return response()->json($ventas, 200);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $venta = ventas::create($data);
        return response()->json($venta, 201);
    }

    public function show($id)
    {
        $venta = ventas::findOrFail($id);
        return response()->json($venta, 200);
    }

    public function update(Request $request, $id)
    {
        $venta = ventas::findOrFail($id);
        $data = $request->all();
        $venta->update($data);
        return response()->json($venta, 200);
    }

    public function destroy($id)
    {
        $venta = ventas::findOrFail($id);
        $venta->delete();
        return response()->json(null, 204);
    }
}
