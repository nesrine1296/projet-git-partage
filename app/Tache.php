<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    public function projet(){
        return $this->belongsTo(Projet::class);
    }
}
