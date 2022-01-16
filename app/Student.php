<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "student";
    protected $fillable = ["SLast_Name", 
    "SMLast_Name", 
    "SNames", 
    "Years_Old", 
    "UsernameCreate", 
    "SE-Mail", 
    "SPassword", 
    "SConfirmation", 
    "Country", 
    "SLesson"];
    protected $primaryKey = "id_student";
}
