<?php

namespace App\Http\Controllers;
use App\Benevole;
use App\course;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class BenevoleController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showDashboard()
    {
       
        $c = DB::table('courses')
        ->join('quarantaines', 'courses.id_quarantaine', '=', 'quarantaines.id')
        ->select('courses.id','courses.date_demande','courses.description','courses.type_course','quarantaines.nom','courses.etat','quarantaines.prenom','quarantaines.ville','quarantaines.cite','quarantaines.num_telephone')
      
        ->get();
        $m = DB::table('courses')
        ->join('quarantaines', 'courses.id_quarantaine', '=', 'quarantaines.id')
        ->select('courses.id','courses.date_demande','courses.description','courses.type_course','quarantaines.nom','courses.etat','courses.id_benevole','quarantaines.prenom','quarantaines.ville','quarantaines.cite','quarantaines.num_telephone')
      
        ->get();
        $d = DB::table('courses')
        ->where('courses.etat','=',"non confirmé")
        ->select('courses.etat')
          ->get();
         $k=count($d);
        return view("/benevole/dashboard",compact('c','k','m'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
          
       
       
     
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
      
      
       
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
    }
}
