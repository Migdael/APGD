<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deporte extends Model
{
    //
    protected $table = "deportes";

    protected $fillable = ['name', 'imagen', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function deportistas()
    {
        return $this->hasMany(Deportista::class);
    }

}
