<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $timestamps = false;
    protected $table = 'Car';
    protected $fillable = [
        'Car_Licence',
        'Car_Color',
        'Car_Outday',
        'Brand',
        'User'
    ];
}
