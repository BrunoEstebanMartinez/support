<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function index(){
        $user = User::All();
        $role = Role::All();
        return view('role', compact('user', 'role'));
    }
}
