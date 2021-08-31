<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'dni',
        'nombre',
        'apellidos',
        'direccion',
        'telefono',
        'cuenta_bancaria',
        'perfil',
        'correo'
     ];


    public function matricula(){
        return $this->belongsTo(Matricula::class);
    }


}
