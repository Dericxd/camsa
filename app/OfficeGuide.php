<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Driver;
use App\Product;

class OfficeGuide extends Model
{
    protected $table = 'office_guides';

    protected $fillable = [
        'number',
        'date',
        'businessName',
        'rif',
        'contactPhone',
        'driverId',
        'driverNi',
        'carName',
        'typeCar',
        'direction',
        'productId',
        'quantityProduct',
        'descriptionProduct',
        'presentationProduct',
        'totalProduct',
        'sealNumber',
        'observations',
        'authorized',
        'responsable'


    ];

}
