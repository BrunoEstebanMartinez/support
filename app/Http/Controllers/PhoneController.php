<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Phone;
use View;

class PhoneController extends Controller
{


    // Instance object for attributes. 
     
    // function CRUD
    
        public function index(){
         $phone = Phone::All();
         return view('index', compact('phone')); //Compact: creación de array con variables existentes como argumentos.
                                                 //Disponibles para cada blade
     }
     public function create(){
        $phone = Phone::All();
        return view('save');
     }
   
     public function store(Request $request){
        $phone = new Phone();
        $phone->id_phone = $request->id_phone;
        $phone->enterprise = $request->enterprise;
        $phone->name = $request->name;
        $phone->model = $request->model; 
        $phone->failure = $request->failure;
        $phone->cause = $request->cause;
        $phone->solution = $request->solution;
        $phone->workforce = $request->workforce;
        $phone->total = $request->total;
        $phone->save();
       return redirect()->route('phone.store');  
    }
   
     public function edit($id_phone){
         $phone = Phone::find($id_phone);
         return view('edit', compact('phone'));
     }
     public function update(Request $request, $id_phone){
       $phone = Phone::find($id_phone);
       $phone->update($request->all());
       return redirect()->route('phone.index');
   }
     public function destroy($id_phone){
            $phone = Phone::find($id_phone)->delete();      
                return redirect()->route('phone.index'); 
            
           
     }
     
     public function show($id_Phone){
      
   }
}
