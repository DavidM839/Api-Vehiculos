<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    // Nombre de la tabla correspondiente en la base de datos
    protected $table = 'ventas';

    // Los campos que se pueden llenar (fillable) en masa
    protected $fillable = [
        'IDVehiculo',
        'IDCliente',
        'FechaVenta',
        'MetodoPago',
    ];

    // Ejemplo de relación: Una venta pertenece a un vehículo
    public function vehiculo()
    {
        return $this->belongsTo(vehiculos::class, 'IDVehiculo');
    }

    // Ejemplo de relación: Una venta pertenece a un cliente
    public function cliente()
    {
        return $this->belongsTo(clientes::class, 'IDCliente');
    }
}
