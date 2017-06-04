<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->string('cedula',9)->unique()->primary();
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->date('fecha_nacimiento');
            $table->string('direccion',250);
            $table->string('estado_civil',20);
            $table->string('sexo',1);
            $table->date('fecha_ingreso');
            $table->smallInteger('descuento')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
