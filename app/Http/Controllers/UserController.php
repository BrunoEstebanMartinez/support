<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function HelloUser(){
        return view('user');
    }

    public function Bridge()
    {

        if(isset($_GET['Empieza como docente'])){
            return view('formteacher', compact('user'));
        }elseif(isset($_GET['Empieza como alumno'])){
            return view('formstudent', compact('user'));
        }
        $user = User::All();
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $user->E_Mail = $request->E_Mail;
        $user->Password = $request->Password;
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
        return view('dash');
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
