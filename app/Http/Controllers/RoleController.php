<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Request;

class RoleController extends Controller
{

    public function index(){
        $roles = Request::input('myroles');
        return view('role', compact('roles'));
    }
}
