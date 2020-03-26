<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Quarantaine;
class QuarantaineController extends Controller
{

    public function index()
    {
        $quarantaines = Quarantaine::orderBy('cin')->paginate(10);
        return view('quarantaine.index',compact('quarantaines'));
    }
    public function QuarantaineShowDashboard(){
        return view('quarantaine.dashboard');
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


}
