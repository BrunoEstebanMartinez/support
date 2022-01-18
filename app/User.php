<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "user";
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
    "namelesson",
    "roleuser"];
    protected $primaryKey = "id_user";
}
