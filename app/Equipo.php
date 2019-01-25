<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    //
    protected $table = "equipos";

    protected $fillable = ['nombre', 'puesto', 'evento_id'];

    public function partisipantes()
    {
        return $this->hasMany(Participante::class);
    }
    public function evento()
    {
        return $this->belongsTo(Evento::class);
    }
}
