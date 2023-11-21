<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clientes; 

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = clientes::all();
        return response()->json($clientes, 200);
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $cliente = clientes::create($data);
        return response()->json($cliente, 201);
    }

    public function show($id)
    {
        $cliente = clientes::findOrFail($id);
        return response()->json($cliente, 200);
    }

    public function update(Request $request, $id)
    {
        $cliente = clientes::findOrFail($id);
        $data = $request->all();
        $cliente->update($data);
        return response()->json($cliente, 200);
    }

    public function destroy($id)
    {
        $cliente = clientes::findOrFail($id);
        $cliente->delete();
        return response()->json(null, 204);
    }
}
