<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    use Notifiable;

    protected $table = "user";
    protected $fillable = ["Last_Name", 
    "MLast_Name",
    "Names", 
    "email", 
    "password", 
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
