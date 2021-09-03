<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ConsumoCafeteria extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'estudiante_id',
        'menu_id',
        'costo_actual'
    ];

    public function estudiante(){
        return $this->belongsTo(Estudiante::class);
    }
    public function menu(){
        return $this->belongsTo(Menu::class);
    }
}
