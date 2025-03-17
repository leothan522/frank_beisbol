<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Equipo extends Model
{
    //
    protected $table = 'equipos';
    protected $fillable = [
        'nombre',
        'estadium',
        'image_logo',
        'image_estadium',
        'activo',
    ];

    public function partidos_local(): HasMany
    {
        return $this->hasMany(Partido::class, 'equipo_local_id', 'id');
    }

    public function partidos_visitante(): HasMany
    {
        return $this->hasMany(Partido::class, 'equipo_visitante_id', 'id');
    }

}
