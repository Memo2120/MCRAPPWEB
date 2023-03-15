<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tecnico extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'puesto',
        'domicilio',
        'foto',
        'zona',
        'estado',
        'id_usuario',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tickets(){
        return $this->hasMany(ticket::class);
    }
}
