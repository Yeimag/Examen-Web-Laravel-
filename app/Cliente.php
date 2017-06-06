<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	public $timestamps = false;
    protected $table = 'clientes';

    protected $fillable = [
        'cedula', 'nombre', 'apellido','fecha_nacimiento','direccion','estado_civil','sexo','fecha_ingreso','descuento',
    ];
}
