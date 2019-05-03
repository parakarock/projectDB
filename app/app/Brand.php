<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $timestamps = false;
    protected $table = 'Brand';
    protected $fillable = [
        'Brand_ID',
        'Brand_Name',
        'Brand_Genaration',
        'Brand_Year',
        'Brand_Type',
        'Brand_Motor',
        'Brand_Gas'
    ];
}
