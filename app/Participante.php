<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    //
    protected $table = "participantes";

    protected $fillable = ['premio', 'deportista_id', 'equipo_id'];

    public function deportista()
    {
        return $this->belongsTo(Deportista::class);
    }

    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }

}
