<?php

use App\Transaksi;
use Faker\Generator as Faker;

$factory->define(Transaksi::class, function (Faker $faker) {
    return [
        Transaksi::create([
            "barang_id" => 1,
            'kode_permintaan' => "TRS/20230423/001",
            "jumlah" => "10",
            "total" => "1",
            "status" => "pending",
        ])
    ];
});