<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	public $timestamps = false;
    protected $table = 'productos';

    protected $fillable = [
        'id', 'nombre', 'marca', 'familia','casa_fabricacion','tipo_unidad', 'departamento', 'activo', 'fecha_ingreso', 'unidad', 'impuesto',
    ];
}
