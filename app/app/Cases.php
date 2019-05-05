<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    public $timestamps = false;
    protected $table = 'Case';
    protected $fillable = [
        'Case_ID',
        'Case_Detail',
        'Case_WhoName', 
        'Case_Phone',
        'OwnerCar',
        'Station',
        'Case_Date'
    ];
}
