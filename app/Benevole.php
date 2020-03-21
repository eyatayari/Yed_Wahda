<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benevole extends Model
{
    public function course(){
        $this->hasMany(course::class);
    }
}
