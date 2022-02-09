<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $table = "lessons";
    protected $fillable = ["title", "description"];
    protected $primaryKey = "id_lesson";
}
