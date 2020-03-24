<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Benevole extends Authenticatable
{
   protected $guard = 'benevole';
    protected $fillable = ['nom','prenom','ville','cin','sexe','cite','num_telephone', 'email', 'password'];

    public function course(){
        $this->hasMany(course::class);
    }
}
