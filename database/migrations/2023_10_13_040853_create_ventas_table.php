<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IDVehiculo');
            $table->unsignedBigInteger('IDCliente');
            $table->date('FechaVenta');
            $table->decimal('PrecioVenta', 10, 2);
            $table->string('MetodoPago');
            $table->timestamps();

            $table->foreign('IDVehiculo')->references('id')->on('vehiculos')->onDelete('cascade');
            $table->foreign('IDCliente')->references('id')->on('clientes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
