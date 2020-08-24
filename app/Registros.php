<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registros extends Model
{
    protected $table = 'registros';

    protected $fillable = ['tipos_id','descricao','valor','users_id'];


    public function imagens()
    {
        return $this->belongsToMany(Imagens::class);
    }

}
