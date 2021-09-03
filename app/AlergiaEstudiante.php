<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlergiaEstudiante extends Model
{
    protected $fillable = [
        'alergia_id',
        'estudiante_id'
    ];
    public function alergias(){
        return $this->belongsTo(Alergia::class);
    }
    public function estudiante(){
        return $this->belongsTo(Estudiante::class);
    }
}
