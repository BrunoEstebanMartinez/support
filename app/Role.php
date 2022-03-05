<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "role";

    protected $fillable = ['role_name', 
                            'role_code'];
    
    protected $primaryKey = "id_role";
    protected $views = ['formstudent', 'formteacher'];
}
