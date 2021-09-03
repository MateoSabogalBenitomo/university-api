<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'nombre',
        'costo'
    ];
}
