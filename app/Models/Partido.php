<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Partido extends Model
{
    //
    protected $table = 'partidos';
    protected $fillable = [
        'title',
        'slug',
        'fecha',
        'hora',
        'equipo_local_id',
        'equipo_visitante_id',
        'url',
        'finalizado'
    ];

    public function equipo_local(): BelongsTo
    {
        return $this->belongsTo(Equipo::class, 'equipo_local_id');
    }

    public function equipo_visitante(): BelongsTo
    {
        return $this->belongsTo(Equipo::class, 'equipo_visitante_id');
    }

}
