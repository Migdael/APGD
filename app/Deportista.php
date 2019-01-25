<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deportista extends Model
{
    //
    protected $table = "deportistas";

    protected $fillable = ['nombre', 'apellido', 'edad', 'sexo', 'direccion', 'telefono', 'fechaNacimiento', 'cedula', 'grado', 'anio', 'carrera', 'carnet', 'estado', 'institucion_id', 'deporte_id', 'tipo_id'];

    public function tipo()
    {
        return $this->belongsTo(Tipo::class);
    }
    public function institucion()
    {
        return $this->belongsTo(Institucion::class);
    }

    public function deporte()
    {
        return $this->belongsTo(Deporte::class);
    }

    public function participantes()
    {
        return $this->hasMany(Participante::class);
    }

}
