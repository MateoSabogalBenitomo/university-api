<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlergiaIngrediente extends Model
{
    protected $fillable = [
        'alergia_id',
        'ingrediente_id'
    ];
}
