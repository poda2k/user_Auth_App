<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userTableModel extends Model
{
    use HasFactory;

    protected $table = 'usersTable' ;
    protected $fillable = [
        'name' ,
        'email' ,
        'password' 
    ];
}
