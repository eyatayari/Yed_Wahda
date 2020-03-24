<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BenevoleController extends Controller
{
    public function showDashboard(){
       // dd(Auth::guard('benevole')->user());
        return view('benevole.dashboard');
    }
}
