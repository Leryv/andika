<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksis";

    protected $casts = [
        'tanggal_pengajuan' => 'date',
        'tanggal_persetujuan' => 'date'
    ];

    protected $fillable = [
        "barang_id",
        "kode_permintaan",
        "jumlah",
        "total",
        "status"
    ];
    protected $guarded = [
        'id'
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}