<?php

use Faker\Generator as Faker;

$factory->define(App\Master\Barang::class, function (Faker $faker) {
    return [
        Barang::create([
            'no_reg' => "BRG/20230423/001",
            'nama' => "Mesin Cuci",
            "harga" => "200000",
            "quantity" => 10,
            "category_id" => 1,
            "brand_id" => 1,
            "satuan_id" => 1
        ])
    ];
});