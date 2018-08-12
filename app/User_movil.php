<?php

namespace Apptotem;

use Illuminate\Database\Eloquent\Model;

class User_movil extends Model
{
    protected $connection = 'mysql_default';
    protected $table = 'users_movil';
    protected $primaryKey = 'Phone';    
    protected $fillable = ['Phone','Name','Birthdate','Address'];   
}
