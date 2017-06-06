<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
	{
    public $timestamps = false;
    protected $table = 'inventarios';

    protected $fillable = [
        'productoID', 'cantidad','cantidad_min','cantidad_max','excepto',
    ];
}
    //
}
