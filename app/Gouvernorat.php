<?php
/**
 * Created by PhpStorm.
 * User: EYA
 * Date: 25/03/2020
 * Time: 16:33
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Gouvernorat extends  Model
{
protected $fillable=['nom_gouvernorat','id'];
public function Municipalites(){
    $this->hasMany('App\Municipalite');
}
}