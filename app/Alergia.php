<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alergia extends Model
{
    protected $fillable = [
        'patologia'
    ];

    public function estudiante(){
        return $this->hasMany(Estudiante::class);
    }



}
