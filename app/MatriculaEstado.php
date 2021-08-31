<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class MatriculaEstado extends Model
{
    protected $fillable = [
        'matricula_id',
        'estado_matricula_id',
    ];


}
