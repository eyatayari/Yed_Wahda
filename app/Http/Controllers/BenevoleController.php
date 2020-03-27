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
       
        $courses = DB::table('courses')
        ->join('quarantaines', 'courses.id_quarantaine', '=', 'quarantaines.id')
        ->select('courses.id','courses.date_demande','courses.description','courses.type_course','quarantaines.nom','courses.etat','quarantaines.prenom','quarantaines.gouvernorat','quarantaines.municipalite','quarantaines.num_telephone')
            ->get();


        $m = DB::table('courses')
        ->join('quarantaines', 'courses.id_quarantaine', '=', 'quarantaines.id')
        ->select('courses.id','courses.date_demande','courses.description','courses.type_course','quarantaines.nom','courses.etat','courses.id_benevole','quarantaines.prenom','quarantaines.municipalite','quarantaines.gouvernorat','quarantaines.num_telephone')
      
        ->get();
        $nonconfirmecourse = DB::table('courses')
        ->where('courses.etat','=',"non confirmé")
        ->select('courses.etat')
          ->get();
         $nombrenonconfirmecourse=count($nonconfirmecourse);

        return view("/benevole/dashboard",compact('courses','nombrenonconfirmecourse','m'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
}
