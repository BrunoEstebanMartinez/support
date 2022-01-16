<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = 'phones';
    protected $fillable = ['enterprise', 
    'name', 
    'model', 
    'failure', 
    'cause', 
    'solution', 
    'workforce', 
    'total'];
    protected $primaryKey = 'id_phone';
    
}
