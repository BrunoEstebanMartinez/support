<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
}
