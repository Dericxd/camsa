<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Driver;

class Vehicle extends Model
{
    protected $table = 'vehicles';

    protected $fillable = [
        'name',
        'brand',
        'model',
        'img',
        'type',
        'plate',
        'state',
        'status',
        'driverId',
        'id'
    ];

}
