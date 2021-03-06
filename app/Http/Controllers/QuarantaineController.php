<?php

namespace App\Http\Controllers;
use App\Benevole;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Quarantaine;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuarantaineController extends Controller
{

    public function index()
    {
        $quarantaines = Quarantaine::orderBy('cin')->paginate(10);
        return view('quarantaine.index',compact('quarantaines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
//
//        //
//    }
//    public function store(Request $request)
//    {
//        //
//    }
    public function edit($id)
    {
        $quarantaine = Quarantaine::find($id);
        return view('quarantaine.edit',compact('quarantaine'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'cin' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'ville' => 'required',
            'date_naissance' => 'required',
            'sexe' => 'required',
            'num_tel' => 'required',

        ]);
        $quarantaine = new Quarantaine();
        $quarantaine->cin = $request->cin;
        $quarantaine->nom = $request->nom;
        $quarantaine->prenom = $request->prenom;
        $quarantaine->ville = $request->ville;
        $quarantaine->date_naissance = $request->date_naissance;
        $quarantaine->sexe = $request->sexe;
        $quarantaine->num_tel = $request->num_tel;
        $quarantaine->save();
        return redirect()->route('quarantaine.index')->with('successMsg','quarantaine Successfully Update');
    }

    public function destroy($id)
    {
        Quarantaine::find($id)->delete();
        return redirect()->back()->with('successMsg','Quarantaine Successfully Delete');
    }

public function QuarantaineShowDashboard(){
        $quarantaine=Auth::guard('quarantaine')->user();
    //dd($quarantaine);
//        $doctors = Benevole::all()->where('gouvernorat','=',$quarantaine->gouvernorat)
//            ->where('municipalite','=',$quarantaine->municipalite)
//        ->where('isdoctor',"=","true");
    $doctors=DB::table('benevoles')->where('isdoctor',"=",'true' )
        ->where('gouvernorat',"=",$quarantaine->gouvernorat)->get();


        return view('quarantaine.dashboard',compact('doctors'));

}
}
