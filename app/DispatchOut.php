<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class DispatchOut extends Model
{
    protected $table = 'dispatch_outs';

    protected $fillable = [
        'description',
        'productId',
        'quantity',
        'presentationProduct',
        'total',
        'code',
        'dateOut',
        'responsible',
        'observation'
    ];

}
