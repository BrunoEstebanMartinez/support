<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = "experience";
    protected $fillable = ["Enterprise", "Years"];
    protected $primaryKey = "id_experience";
}
