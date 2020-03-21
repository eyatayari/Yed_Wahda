<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autorite extends Model
{
    public function Autorisations(){
        $this->hasMany('app\autorisation');
    }
}
