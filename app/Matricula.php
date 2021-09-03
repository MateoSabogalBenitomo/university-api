<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'fecha_ingreso',
        'estudiante_id',
        'costo_matricula',
        'costo_mensualidad'
        
    ];

    public function estudiante(){
        return $this->hasOne(Estudiante::class);
    }

    public function estado(){
        return $this->hasMany(EstadoMatricula::class);
    }
}
