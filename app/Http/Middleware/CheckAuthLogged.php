<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAuthLogged
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
//        dump("Misddleware");
//        dump(Auth::guard('admin')->user());
//        dump(Auth::guard('superadmin')->user());
//        dump(Auth::guard('enseignant')->user());
//        dump(Auth::guard()->user());

        return $next($request);
    }
}
