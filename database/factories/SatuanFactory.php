<?php

use App\Satuan;
use Faker\Generator as Faker;

$factory->define(Satuan::class, function (Faker $faker) {
    return [
        Satuan::create([
            'kode_satuan' => 'STA/20230412/001',
            "nama_satuan" => "Sepaket",
        ])
    ];
});