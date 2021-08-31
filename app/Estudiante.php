<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'nombre',
        'apellidos',
        'fecha_nacimiento',
     ];


    public function matricula(){
        return $this->belongsTo(Matricula::class);
    }


}
