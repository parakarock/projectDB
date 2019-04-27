<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = 'Users';
    protected $fillable = [
        'User_Citizen',
        'User_Name',
        'User_Lname',
        'User_BirthDay',
        'User_Country',
        'User_Province',
        'User_Post',
        'User_Address'
    ];
}
