<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const ADMIN=1;
    const correos=1;

    protected $fillable = [
        'name',
        'descripcion'
     ];
}
