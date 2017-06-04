<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);
            $table->string('marca',50);
            $table->string('familia',50);
            $table->string('casa_fabricacion',50);
            $table->string('tipo_unidad',50);
            $table->string('departamento',50);
            $table->integer('activo');
            $table->date('fecha_ingreso');
            $table->integer('unidad');
            $table->smallInteger('impuesto')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
