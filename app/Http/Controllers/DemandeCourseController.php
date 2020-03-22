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
    public function indexconfirmé()
    {
        $c = DB::table('courses')
        ->join('quarantaines', 'courses.id_quarantaine', '=', 'quarantaines.id')
     
      ->select('courses.id','courses.date_demande','courses.description','courses.type_course','courses.etat','quarantaines.nom','quarantaines.ville','quarantaines.prenom','quarantaines.date_naissance')
        ->get();
       
       
     
     
       
        return view("/course/affichedemandecourseconfirmé",compact('c'));
       
    }
    public function indexnonconfirmé()
    {
        $c = DB::table('courses')
        ->join('quarantaines', 'courses.id_quarantaine', '=', 'quarantaines.id')
        ->select('courses.id','courses.date_demande','courses.description','courses.type_course','quarantaines.nom','courses.etat','quarantaines.prenom','quarantaines.ville','quarantaines.date_naissance')
      
        ->get();
        $d = DB::table('courses')
        ->where('courses.etat','=',"n'est pas confirmé")
        ->select('courses.etat')
          ->get();
         $k=count($d);
         
       
        return view("/course/affichedemandedecoursenonconfirmé",compact('c','k'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirmé(Request $request, $id)
    {
          
       
      
       
        $c=course::findOrFail($id);
        $c->etat="confirmé";
       
        $c->save();
        return redirect()->route('demandecoursenonconfirmé');
     
      
    }


    public function create(Request $request)
    {
          
       
      
       
        return view("/course/demandecourse");
     
      
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
        $data->type_course=$request->type_course;
        
       

        $data->description =$request->description;
        $data->etat ="n'est pas confirmé";
        $data->id_quarantaine =1;
       
        $data->date_demande = date('Y/m/d H:m:s');
       
     
        
      
      
        
       
       
       


        $data->save();
            return redirect("/demandecourse");
      
       
      
       
      
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
