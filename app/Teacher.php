<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = "teacher";
    protected $fillable = ["Last_Name", 
    "MLast_Name",
    "Names", 
    "E_Mail", 
    "Password", 
    "Confirmation", 
    "bday", 
    "bmonth", 
    "byear", 
    "Gender",
    "GenerPerson", 
    "Phone1", 
    "Phone2", 
    "Country", 
    "State", 
    "PostCode", 
    "DirectionH", 
    "namelesson"];
    protected $primaryKey = "id_teacher";
}
