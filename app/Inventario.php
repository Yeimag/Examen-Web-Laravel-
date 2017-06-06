<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
	public $timestamps = false;
    protected $table = 'inventario';

    protected $fillable = [
        'id', 'productoID', 'cantidad', 'cantidad_min','cantidad_max','excepto',
    ];
}