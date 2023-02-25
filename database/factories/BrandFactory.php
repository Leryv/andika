<?php

use App\Brand;
use Faker\Generator as Faker;

$factory->define(App\Brand::class, function (Faker $faker) {
    return [
        Brand::create([
            'kode_brand' => 'BRA/20230412/001',
            "nama_brand" => "Samsung",
        ])
    ];
});