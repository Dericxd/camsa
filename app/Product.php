<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DispatchIn;
use App\DispatchOut;
use App\OfficeGuide;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'quantity',
        'unity',
        'presentation',
        'status',
        'amount',
    ];

}
