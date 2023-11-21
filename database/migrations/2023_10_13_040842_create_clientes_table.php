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
        $table->string('Telefono', 9); // Cambio en la longitud del campo Telefono
        $table->string('Direccion');
        $table->string('DUI', 10)->nullable(); // Nuevo campo DUI con longitud 10
        $table->timestamps();

    });
}

    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
