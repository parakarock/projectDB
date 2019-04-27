<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'Car';
    protected $fillable = [
        'Car_Licence',
        'Car_Color',
        'Car_Outday',
        'Brand',
        'User'
    ];
}
