<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'nombre',
        'costo'
    ];
}
