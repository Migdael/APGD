<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    //
    protected $table = "instituciones";

    protected $fillable = ['nombre', 'tipo'];

    public function deportistas()
    {
        return $this->hasMany(Deportista::class);
    }
}
