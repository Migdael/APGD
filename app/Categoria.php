<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    protected $table = "categorias";

    protected $fillable = ['nombre', 'sexo'];

    public function eventos()
    {
        return $this->hasMany(Evento::class);
    }
}
