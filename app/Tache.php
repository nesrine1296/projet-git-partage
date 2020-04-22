<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    public function projets(){
        return $this->belongsTo()(Projet::class);
    }
}
