<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    public function quarantaines(){
        $this->belongsTo(Quarantaine::class);
    }
    public function benevole(){
        $this->belongsTo(Benevole::class);
    }
}
