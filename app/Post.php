<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
        protected $table = "posts";
        protected $fillable = ["title", "description"];
        protected $primaryKey = "id_post"; 
}
