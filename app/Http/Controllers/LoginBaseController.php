<?php

namespace App\Http\Controllers;

use App\Role;
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
        $role = Role::All();
        return view('login', compact('role'));
    }

    public function authusercredentials(Request $request){
        $mycredentials = $request->only('email','password');
        return Auth::attempt($mycredentials)? redirect($redirectToFeed = RouteServiceProvider::FEED) : redirect(RouteServiceProvider::HOME);
    }


}
