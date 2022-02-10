<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User as Users;
use App\TagUser as PivotTagUser;
class Tag extends Model
{
    protected $table = "tag";
    protected $fillable = ["name_tag"];
    protected $primaryKey = "id_tag";


    public function tagingMyUser(){return $this->belongsToMany('Users')->using('PivotTagUser');}
}
