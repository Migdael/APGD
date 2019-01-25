<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //
    protected $table = "eventos";

    protected $fillable = ['nombre', 'ambito', 'cede', 'fecha', 'categoria_id', 'user_id', 'organizacion_id'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function organizador()
    {
        return $this->belongsTo(Organizador::class);
    }
    public function equipos()
    {
        return $this->hasMany(Equipo::class);
    }
}
