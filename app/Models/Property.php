<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable =[
        'name',
        'address',
        'location',
        'city',
        'district',
        'state',
        'latitude',
        'longitude',
    ];
}
