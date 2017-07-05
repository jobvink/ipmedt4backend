<?php

namespace App\Http\Controllers\Auth;

use App\Docter;
use App\Http\Controllers\Controller;
use App\Patient;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
        $this->middleware('guest')->except('logout');
    }


    public function gebruiker(){
        $email = request('email');
        $password = request('password');
        $docter = Docter::where('email', '=', $email)->first();
        $patient = Patient::where('email', '=', $email)->first();

        $rules = [
            'email' => 'required'
        ];

        if ($patient === null)
        {
            $rules['email'] .= '|exists:docter,email';
        }
        else
        {
            $rules['email'] .= '|exists:patient,username';
        }


        $validator = \Validator::make(request()->all(),
            [
                $rules,
                'password' => 'required',
            ],
            [
                'email' => 'gebruikersnaam en wachtwoord komen niet overeen',
                'password.required' => 'gebruikersnaam en wachtwoord komen niet overeen',
            ]
        );

        if ($patient !== null){
            return redirect('/patient/' . $patient->id);
        } else if($docter !== null) {
            return redirect('/docter/' . $docter->id);
        } else {
            $validator->getMessageBag()->add('email', 'gebruikersnaam en/of wachtwoord komen niet overeen!');
            return redirect('/login')->withErrors($validator)->withInput();
        }
    }
}
