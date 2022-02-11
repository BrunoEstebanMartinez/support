<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User as Users;
use App\Comment as Comments;

class Post extends Model
{
        protected $table = "posts";
        protected $fillable = ["title", "description"];
        protected $primaryKey = "id_post"; 

        public function postMyUser(){return $this->belongsTo('Users');}
        public function currentCommentUser(){return $this->hasMany('Comments');}
        
}

