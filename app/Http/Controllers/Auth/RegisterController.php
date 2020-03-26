<?php

namespace App\Http\Controllers\Auth;

use App\Benevole;
use App\Quarantaine;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function showRegisterForm()
    { $country_list = DB::table('gouvernorats')

        ->get();

        return view('auth.inscription')->with('gouvernorat_list', $country_list);
    }

    public function myformAjax($id)
    {
        $cities = DB::table("municipalites")
            ->where("gouvernorat_id",$id)
            ->get();
        return json_decode($cities);
    }




    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [


            'email' => ['required', 'string', 'email', 'max:255', 'unique:benevoles'],
            'password' => ['required', 'string', 'min:8'],
            'nom' => ['required', 'string'],
            'prenom' => ['required', 'string'],
            'cin' => ['required', 'string','min:8','max:8'],
            'gouvernorat' => ['required', 'string'],
            'municipalite' => ['required', 'string'],
            'sexe' => ['required', 'string'],
            'isdoctor' => [ 'string'],
            'num_telephone' => ['required', 'string','min:8','max:12']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function createBenevole(Request $request)
    {
//        $this->validator($request->all())->validate();
        $benevole = new Benevole();
//        $benevole = Benevole::create([

        $benevole->nom = $request['nom'];
            $benevole->prenom = $request['prenom'];
            $benevole->cin = $request['cin'];
            $benevole->municipalite = $request['municipalite'];
            $benevole->gouvernorat = $request['gouvernorat'];
            $benevole->sexe = $request['sexe'];
            $benevole->num_telephone = $request['num_telephone'];
            $benevole->email = $request['email'];
        $benevole->isdoctor= $request['isdoctor'];
            $benevole->password = Hash::make($request['password']);

            $benevole->save();

//            dd($benevole);
        //]);
        return redirect('/login');
    }

    public function createQuarantaine(Request $request)
    {
//        $this->validator($request->all())->validate();
        $benevole = Quarantaine::create([
            'nom' => $request['nom'],
            'prenom' => $request['prenom'],
            'cin' => $request['cin'],
            'municipalite' => $request['municipalite'],
            'gouvernorat' => $request['gouvernorat'],
            'sexe' => $request['sexe'],
            'num_telephone' => $request['num_telephone'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect('/login');

    }
}
