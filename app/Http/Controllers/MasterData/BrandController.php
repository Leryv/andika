<?php

namespace App\Http\Controllers\MasterData;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function index()
    {
        return view("master.data.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kategori()
    {
        return view("master.data.kategori");
    }

    public function brand()
    {
        return view("master.data.brand");
    }
    public function satuan()
    {
        return view("master.data.satuan");
    }

}
