<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    // Nombre de la tabla correspondiente en la base de datos
    protected $table = 'clientes';

    // Los campos que se pueden llenar (fillable) en masa
    protected $fillable = [
        'Nombre',
        'Apellido',
        'CorreoElectronico',
        'Telefono',
        'Direccion',
        'DUI', 
    ];

    // Ejemplo de relación: Un cliente tiene muchas ventas
    public function ventas()
    {
        return $this->hasMany(ventas::class, 'IDCliente');
    }
}
