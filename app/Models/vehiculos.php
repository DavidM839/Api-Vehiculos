<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehiculos extends Model
{
    // Nombre de la tabla correspondiente en la base de datos
    protected $table = 'vehiculos';

    // Los campos que se pueden llenar (fillable) en masa
    protected $fillable = [
        'marca',
        'modelo',
        'anio',
        'precio',
        'tipoVehiculo',
        'estado',
        // Otros campos aquí
    ];

    // Ejemplo de relación: Un vehículo pertenece a muchas ventas
    public function ventas()
    {
        return $this->hasMany(Venta::class, 'IDVehiculo');
    }
}