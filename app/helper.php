<?php
/**
 * Created by PhpStorm.
 * User: EYA
 * Date: 23/03/2020
 * Time: 21:31
 */
use Illuminate\Support\Facades\Auth ;


      function checkAuthUser() {
          $user=null;
          $url="/register";
    if(Auth::guard('benevole')->check()){
        $user=Auth::guard('benevole')->user();
        $url="/benevole/dashboard";
    }
    else if(Auth::guard('autorite')->check()){
        $user=Auth::guard('autorite')->user();
        $url="/autorite/dashboard";
    }
    else if(Auth::guard('quarantaine')->check()){
        $user=Auth::guard('quarantaine')->user();
        $url="/quarantaine/dashboard";
    }



        return [
            'user' => $user ,
            'url' => $url
        ];
}
