<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class PagoMensualidad extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'matricula_id',
        'persona_id',
        'costo_consumo'
     ];


    public function persona(){
        return $this->belongsTo(Persona::class);
    }

    public function matricula(){
        return $this->belongsTo(Matricula::class);
    }


}
