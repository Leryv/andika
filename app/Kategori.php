<?php

namespace App;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{

    protected $table = 'kategoris';
    protected $guarded = [
        'id'
    ];

}