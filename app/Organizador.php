<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizador extends Model
{
    //
    protected $table = "organizadores";

    protected $fillable = ['nombre'];

    public function eventos()
    {
        return $this->hasMany(Evento::class);
    }
}
