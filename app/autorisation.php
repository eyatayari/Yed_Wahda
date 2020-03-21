<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class autorisation extends Model
{
    public function autorite(){
        $this->belongsTo('App\autorite');
    }
public  function quarantaines(){
    $this->belongsTo(Quarantaine::class);
}
}
