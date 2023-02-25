<?php

use App\Kategori;
use Faker\Generator as Faker;

$factory->define(App\Kategori::class, function (Faker $faker) {
    return [
        Kategori::create([
            'kode_kategori' => 'CTG/20230412/001',
            "nama" => "Office",
        ])
    ];
});