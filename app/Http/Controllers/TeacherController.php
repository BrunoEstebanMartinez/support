<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\Experience;
use Illuminate\Http\Request;
use View;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher = Teacher::All();
        return view('formteacher', compact('teacher')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teacher = Teacher::All();
        return view('formteacher');
    }

  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher = new Teacher();
        $teacher->Last_Name = $request->Last_Name;
        $teacher->MLast_Name = $request->MLast_Name;
        $teacher->Names = $request->Names;
        $teacher->E_Mail = $request->E_Mail;
        $teacher->Password = $request->Password;
        $teacher->Confirmation = $request->Confirmation;
        $teacher->bday = $request->bday;
        $teacher->bmonth = $request->bmonth;
        $teacher->byear = $request->byear;
        $teacher->Gender = $request->Gender;
        $teacher->GenerPerson = $request->GenerPerson;
        $teacher->Phone1 = $request->Phone1;
        $teacher->Phone2 = $request->Phone2;
        $teacher->Country = $request->Country;
        $teacher->State = $request->State;
        $teacher->PostCode =$request->PostCode;
        $teacher->DirectionH = $request->DirectionH;
        $teacher->namelesson = $request->namelesson;
        $teacher->save();
        return view('teacher');
        //return redirect()->route('Formteacher.');

    }
    /*
    public function ExperienceStore(Request $request)
    {
        
            $experience = new Experience();
            $experience -> Enterprise = $request->Enterprise;
            $experience -> Years = $request->Years;
            $experience->save();
            return redirect()->route('Formteacher.formteacher');    
      

    

    }
    */

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
