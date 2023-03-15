<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'direccion',
        'zona',
        'tecnicoAsignado',
        'estado',
    ];


    public function tecnico(){
        return $this->belongsTo(tecnico::class);
    }

}


