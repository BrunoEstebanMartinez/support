<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
 

class LoginBaseController extends Controller
{

    protected $redirectTo = RouteServiceProvider::FEED;

    public function __construct(){
        $this->middleware('guest');
    }

    public function InitialLate(){
        return view('login');
    }


    public function authusercredentials(Request $request){

        $mycredentials = $request->only('email','password');
        return Auth::attempt($mycredentials)? redirect()->route('feed') : $this->redirectTo;
    }


}
