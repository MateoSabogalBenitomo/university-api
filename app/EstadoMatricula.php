<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class EstadoMatricula extends Model
{
    protected $fillable = [
        'nombre'
    ];

    public function matriculas(){
        return $this->hasMany(Matricula::class);
    }

}
