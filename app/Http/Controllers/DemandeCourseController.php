<?php

namespace App\Http\Controllers;
use App\course;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
       
        $data =new course;
        $type_course = implode(",", $request->type_course);
        $data->type_course=$type_course;
        
       

        $data->description =$request->description;
        $data->etat ="n'est pas confirmé";
        $data->id_quarantaine =1;
       
        $data->date_demande = date('Y/m/d H:m:s');
       
     
       
     
        
      
      
        
       
       
       


        $data->save();
            return redirect("home");
      
       
      
       
      
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
