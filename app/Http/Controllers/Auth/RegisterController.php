<?php

namespace App\Http\Controllers\Auth;

use App\Benevole;
use App\Quarantaine;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
    {
        return view('auth.inscription');
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:benevoles'],
            'password' => ['required', 'string', 'min:8'],
            'nom' => ['required', 'string'],
            'prenom' => ['required', 'string'],
            'cin' => ['required', 'string','min:8','max:8'],
            'cite' => ['required', 'string'],
            'ville' => ['required', 'string'],
            'sexe' => ['required', 'string'],
            'num_telephone' => ['required', 'string','min:8','max:12']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function createBenevole(Request $request)
    {
      $this->validator($request->all())->validate();
        $benevole = new Benevole();
//        $benevole = Benevole::create([
            $benevole->nom = $request['nom'];
            $benevole->prenom = $request['prenom'];
            $benevole->cin = $request['cin'];
            $benevole->cite = $request['cite'];
            $benevole->ville = $request['ville'];
            $benevole->sexe = $request['sexe'];
            $benevole->num_telephone = $request['num_telephone'];
            $benevole->email = $request['email'];
            $benevole->password = Hash::make($request['password']);

            $benevole->save();


        //]);
        return redirect('/login');
    }

    protected function createQuarantaine(Request $request)
    {


//        $this->validator($request->all())->validate();
        $benevole = Quarantaine::create([
            'nom' => $request['nom'],
            'prenom' => $request['prenom'],
            'cin' => $request['cin'],
            'cite' => $request['cite'],
            'ville' => $request['ville'],
            'sexe' => $request['sexe'],
            'num_telephone' => $request['num_telephone'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect('/login');

    }
}
