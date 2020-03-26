<?php
/**
 * Created by PhpStorm.
 * User: EYA
 * Date: 25/03/2020
 * Time: 16:33
 */



namespace App;

use Illuminate\Database\Eloquent\Model;


class Municipalite extends Model
{
public function gouvernorat(){
    $this->belongsTo('App\Gouvernorat');
}
}