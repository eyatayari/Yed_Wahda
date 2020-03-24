<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Quarantaine extends Authenticatable
{ protected $guard = 'quarantaine';

    protected $fillable = [
    'nom','prenom','ville','cin','sexe','num_telephone','cite','ville', 'email', 'password',
];
    public function courses(){
        $this->hasMany(course::class);
    }
    public function autorisations(){
        $this->hasMany(autorisation::class);
    Auth::User();
    }
}
