<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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


    }
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function LoginVerification(Request $request){

        $this->validate($request, [
                'email'   => 'required|email',
                'password' => 'required|min:6'
            ]);


            //
            if (Auth::guard('benevole')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
                //dd(Auth::guard('benevole')->user());
                return redirect()->route('BenevoleshowDashboard');
            }

        if (Auth::guard('quarantaine')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->route('QuarantaineShowDashboard');
        }

        if (Auth::guard('autorite')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            dd(Auth::guard('autorite')->user());
            return redirect()->intended('/autorite');
        }
            return back()->withInput($request->only('email', 'remember'));

    }


    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function Logout(){

       Auth::logout();
        Session::flush();


        return redirect(route('Login'));
    }
}
