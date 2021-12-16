<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

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
    
    // public function showLoginForm(Required $request)
    // {
        
    //     return view('login');
    // }

    // public function store(Request $request){
    //     dd($request);
    // }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    

    // public function username()
    // {
    //     $login = request()->input('email');
    //     $field = filter_var($login,FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    //     request()->merge([$login => $field]);
    //     return $field;
    // }
    public function showLoginForm()
    {
        return view('login');
    }

    public function username()
    {
        $login = request()->input('email');
        $field = filter_var($login,FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        request()->merge([$login => $field]);
        return $field;

    }

}
