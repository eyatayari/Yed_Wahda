<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quarantaine extends Model
{
    public function courses(){
        $this->hasMany(course::class);
    }
    public function autorisations(){
        $this->hasMany(autorisation::class);
    }
}
