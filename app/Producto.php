<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = 'productos';

    protected $fillable = [
        'nombre', 'marca', 'familia','casa_fabricacion','tipo_unidad','departamento','activo','fecha_ingreso','unidad', 'impuesto',
    ];
}
