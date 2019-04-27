<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $table = 'PoliceStation';
    protected $fillable = [
        'Station_ID',
        'Station_Name',
        'Station_Province', 
        'Station_Post',
        'Station_Phone',
        'Station_Address'
    ];
}
