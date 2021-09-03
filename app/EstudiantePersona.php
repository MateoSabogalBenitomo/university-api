<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class EstudiantePersona extends Model
{
    protected $fillable = [
        'estudiante_id',
        'persona_id',
        'parentezco'
    ];

    public function estudiante(){
        return $this->belongsTo(Estudiante::class);
    }
    public function persona(){
        return $this->belongsTo(Persona::class);
    }

}
