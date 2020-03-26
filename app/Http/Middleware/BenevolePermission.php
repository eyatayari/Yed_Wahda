<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class BenevolePermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
 public function handle($request, Closure $next)
    {
        if(!Auth::guard('benevole')->check()){


           return abort(403);

        }
        return $next($request);
  //      else if(!Auth::guard('quarantaine')->check()){
//
//            return abort(403);
//
//        }
//        else if(!Auth::guard('autorite')->check()){
//
//            return abort(403);
//
//        }
//        return $next($request);
//   }
//    public function handle($request, Closure $next ,$roles)
//   {
//        if (! $request->user()->hasAnyRole($roles)) {
//        abort(403);
//        }
//

}

}

