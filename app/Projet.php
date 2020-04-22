<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    public function projets(){
        return $this->hasMany(Projet::class);
    }

    


    
