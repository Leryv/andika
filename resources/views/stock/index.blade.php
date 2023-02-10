@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5 ">
        <div class="col-md-12 d-flex align-items-center">
            <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">Kode Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Brand</th>
                <th scope="col">UOM</th>
                <th scope="col">Price</th>
                <th scope="col">Stock</th>
                <th scope="col">Option</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">BRG/20220403/001</th>
                    <td>LCD 14 Inch</td>
                    <td>Samsung</td>
                    <td>Unit</td>
                    <td>Rp. 1.500.000</td>
                    <td>80</td>
                    <td></td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
