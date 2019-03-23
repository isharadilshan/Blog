<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    // protected $redirectTo = '/home';

    protected function authenticated(){

        if(Auth::User()->isAdmin()){//if user is admin then he is redirect to the /admin  route

            return redirect('/admin');

        }else if(Auth::User()->isUser()){//else if user is lawyer then he is redirect to the /lawyer  route

            return redirect('/user');

        }else{

            return redirect('/');//else user is user then he is redirect to the /user  route
        }
        
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
