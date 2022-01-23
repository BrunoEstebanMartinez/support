<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginBaseController extends Controller
{
    public function InitialLate(){
        return view('login');
    }
}
