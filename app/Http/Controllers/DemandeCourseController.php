<?php

namespace App\Http\Controllers;
use App\course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DemandeCourseController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirme(Request $request, $id,$idb)
    {
          
       
      
       
        $c=course::findOrFail($id);
        $c->etat="confirmé";
        $c->id_benevole=$idb;
        $c->save();
        return redirect()->route('BenevoleshowDashboard');
     
      
    }

    public function create(Request $request)
    {
          
       
      
       
        return view("index");
     
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $data =new course();
        $type_course = implode(",", $request->type_course);
        $data->type_course=$type_course;
        
       

        $data->description =$request->description;
        $data->etat ="non confirmé";
        $data->id_quarantaine =Auth::guard('quarantaine')->user()->id;
        
        $data->date_demande = now()->format('Y/m/d H:m:s');

     
       
     
        
      
      
        
       
       
       


        $data->save();
            return redirect(route('home'));
      
       
      
       
      
    }

}
