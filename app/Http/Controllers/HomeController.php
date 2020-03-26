<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
  {
       $this->middleware('auth');
   }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {$path = 'C:\xampp\htdocs\StandForTunisia\public\js\coronavirus.politologue.com-data-2020-03-24.json';
        $content =json_decode(file_get_contents($path),true);

        return view('home',compact('content'));
    }
}
