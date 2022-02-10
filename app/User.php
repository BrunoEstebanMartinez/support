<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Role as Roles;
use App\Lesson as Lessons;
use App\Tag as PivotUserTag;

class User extends Authenticatable
{

    use Notifiable;

    protected $table = "user";
    protected $fillable = ["Last_Name", 
    "MLast_Name",
    "Names", 
    "email", 
    "password", 
    "password_confirmation", 
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

    public function rolesMyUser(){return $this->belongsTo('Roles');}
    public function lesssonsMyUser(){return $this->belongsTo('Lessons');}
    public function tagsMakeUser(){return $this->belongsTo('PivotUserTag');}

}
