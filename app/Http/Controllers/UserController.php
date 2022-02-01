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
            'email' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed'],
        ]);
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data){
        return User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'Names' => $data['Names'],
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->Last_Name = $request->Last_Name;
        $user->MLast_Name = $request->MLast_Name;
        $user->Names = $request->Names;
        $user->email = $request->email;
        $user->Password = $request->password;
        $user->Confirmation = $request->Confirmation;
        $user->bday = $request->bday;
        $user->bmonth = $request->bmonth;
        $user->byear = $request->byear;
        $user->Gender = $request->Gender;
        $user->GenerPerson = $request->GenerPerson;
        $user->Phone1 = $request->Phone1;
        $user->Phone2 = $request->Phone2;
        $user->Country = $request->Country;
        $user->State = $request->State;
        $user->PostCode =$request->PostCode;
        $user->DirectionH = $request->DirectionH;
        $user->namelesson = $request->namelesson;
        $user->roleuser = $request->roleuser;
        $user->save();
        return redirect()->route('feed');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
