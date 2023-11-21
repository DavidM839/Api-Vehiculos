<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('CorreoElectronico');
            $table->string('Telefono');
            $table->string('Direccion');
            $table->unsignedBigInteger('IDVehiculo');
            $table->timestamps();

            $table->foreign('IDVehiculo')->references('id')->on('vehiculos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
