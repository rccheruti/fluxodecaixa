<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagens extends Model
{
    public function registos()
    {
        return $this->belongsToMany(Registros::class);
    }
}
