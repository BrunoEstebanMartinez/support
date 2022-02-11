<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post as Posts;
class Comment extends Model
{
    protected $primaryKey = 'id_comment';
    
}