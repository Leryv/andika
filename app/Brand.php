<?php

namespace App;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

    protected $table = 'brands';
    protected $guarded = [
        'id'
    ];

}