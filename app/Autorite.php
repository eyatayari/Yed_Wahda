<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Autorite extends Authenticatable
{ protected $guard = 'autorite';
protected $fillable=[
  'cin','nom','prenom','email','password','sexe'
];
    public function Autorisations(){
        $this->hasMany('app\autorisation');
    }
}
