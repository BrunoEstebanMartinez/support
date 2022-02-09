<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
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

     protected $redirectTo = RouteServiceProvider::FEED;

     public function __construct()
     {
         $this->middleware('guest');
     }

    public function index()
    {

        $user = User::All();
        if(isset($_GET['docente'])){
            return view('formteacher', compact('user'));
        }elseif(isset($_GET['alumno'])){
            return view('formstudent', compact('user'));
        }
       
        
    }

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
            'roleuser' => ['required'],
             
        ]);
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data){
        $UserUp = User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'Last_Name' => $data['Last_Name'],
            'MLast_Name' => $data['MLast_Name'],
            'Names' => $data['Names'],
            'Country' => $data['Country'],
            'bday' => $data['bday'] = 1,
            'bmonth' => $data['bmonth'] = 'name',
            'byear' => 1,
            'byear' => $data['byear'] = 1,
            'Gender' => $data['Gender'] = 'name',
            'GenerPerson' => $data['GenerPerson'] = 'name',
            'Phone1' => $data['Phone1'] = 1,
            'Phone2' => $data['Phone2'] = 1,
            'State' => $data['State'] = 'name',
            'PostCode' => $data['PostCode'] = 1,
            'DirectionH' => $data['DirectionH'] = 'name',
            'namelesson' => $data['namelesson'] = 0,
            'roleuser' => $data['roleuser'],
        ]);
        return $UserUp;
    }
   
    public function show(User $user)
    {
        //
    }

  
    public function edit(User $user)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        //
    }
}
