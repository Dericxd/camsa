<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class DispatchIn extends Model
{
    protected $table = 'dispatch_ins';

    protected $fillable = [
        'produtcId',
        'description',
        'quantity',
        'presentationProduct',
        'total',
        'code',
        'dateOut',
        'dateIn',
        'responsible',
        'observation'
    ];
}
