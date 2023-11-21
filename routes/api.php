<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VentaController;

    // Rutas para Vehiculos
    Route::get('vehiculos', [VehiculoController::class, 'index']);
    Route::post('vehiculos', [VehiculoController::class, 'store']);
    Route::get('vehiculos/{id}', [VehiculoController::class, 'show']);
    Route::put('vehiculos/{id}', [VehiculoController::class, 'update']);
    Route::delete('vehiculos/{id}', [VehiculoController::class, 'destroy']);

    // Rutas para Clientes
    Route::get('clientes', [ClienteController::class, 'index']);
    Route::post('clientes', [ClienteController::class, 'store']);
    Route::get('clientes/{id}', [ClienteController::class, 'show']);
    Route::put('clientes/{id}', [ClienteController::class, 'update']);
    Route::delete('clientes/{id}', [ClienteController::class, 'destroy']);

    // Rutas para Ventas
    Route::get('ventas', [VentaController::class, 'index']);
    Route::post('ventas', [VentaController::class, 'store']);
    Route::get('ventas/{id}', [VentaController::class, 'show']);
    Route::put('ventas/{id}', [VentaController::class, 'update']);
    Route::delete('ventas/{id}', [VentaController::class, 'destroy']);

