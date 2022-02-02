<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Providers\RouteServiceProvider;
 

class LoginBaseController extends Controller
{
    use AuthenticatesUsers;

    public function __construct(){
        $this->middleware('guest')->except('logout');
    }

    public function InitialLate(){
        return view('login');
    }

    public function authusercredentials(Request $request){
        $mycredentials = $request->only('email','password');
        return Auth::attempt($mycredentials)? redirect($redirectToFeed = RouteServiceProvider::FEED) : redirect(RouteServiceProvider::HOME);
    }


}
