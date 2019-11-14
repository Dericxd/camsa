<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Vehicle;
use App\OfficeGuide;

class Driver extends Model
{
    protected $table = 'drivers';

    protected $fillable = [
        'firstName',
        'lastName',
        'ci',
        'phone',
        'img',
        'state',
        'id'
    ];

}
