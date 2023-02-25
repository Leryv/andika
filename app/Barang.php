<?php

namespace App;

// use App\Brand;
// use App\Kategori;
// use App\Satuan;
use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{


    protected $table = 'barangs';
    protected $fillable = [
        'nama',
        'harga',
        'no_reg',
        'quantity',
        'category_id',
        'brand_id',
        'satuan_id'
    ];
    protected $guarded = [
        'id'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
    public function satuan()
    {
        return $this->belongsTo(Satuan::class);
    }
}