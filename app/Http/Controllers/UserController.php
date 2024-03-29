<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\TraitsCoreLate\Registers\RegisterSystem;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator; 
use App\Providers\RouteServiceProvider; 
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     use RegistersUsers;
     use RegisterSystem;

     protected $redirectTo = RouteServiceProvider::FEED;

     public function __construct()
     {
         $this->middleware('guest');
     }

     
    public function forms()
    {//return route('Upuser', [$role_name => Request::input('myroles')])?: view('$role_name');
        $user = User::All();
        $role_name = view(Request::input('myroles'), compact('user'));
    return $role_name;}

        /*
        public function forms($role_name){
            return view($role_name, compact('user', 'roles'));
        }
        */
    public function validator(array $data){
        return Validator::make($data, [
            'Names' => ['required', 'string', 'max:255'],
            'Last_Name' => ['required', 'string', 'max:255'],
            'MLast_Name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed'],
            'password_confirmation' => ['required'],
            'Gender' => ['string', 'max:255'],
            'Phone1' => ['string', 'min:9'],
            'rolecode_id' => ['required'],
             
        ]);
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
/* With*/
    public function create(array $data){
        $UserUp = User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'Last_Name' => $data['Last_Name'],
            'MLast_Name' => $data['MLast_Name'],
            'Names' => $data['Names'],
            'Country' => Request::input('Country', 'name'),
            'bday' => Request::input('bday', 1),
            'bmonth' => Request::input('bmonth', 'name'),
            'byear' => Request::input('byear', 1),
            'Gender' => Request::input('Gender', 'name'),
            'GenerPerson' => Request::input('GenerPerson', 'name'),
            'Phone1' => Request::input('Phone1', 1),
            'Phone2' => Request::input('Phone2', 1),
            'State' => Request::input('State', 'name'),
            'PostCode' => Request::input('PostCode', 1),
            'DirectionH' => Request::input('DirectionH', 'name'),
            'lessoncode_id' => Request::input('lessoncode_id', 'name'),
            'rolecode_id' => $data['rolecode_id'],
        ]);  
        return $UserUp;
    }
   
}
