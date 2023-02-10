@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5 ">
        <div class="col-md-12 d-grid align-items-center">
            <div class="alert alert-danger" role="alert">
                Request Barang Akan Masuk Ke Dalam Table Ini
            </div>
            <table class="table table-bordered fixed responsive">
            <thead>
                <tr>
                <th scope="col">Referensi</th>
                <th scope="col">Supplier</th>
                <th scope="col">Status</th>
                <th scope="col">Jumlah Permintaan</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Option</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">REF/20220403/001</th>
                    <td>Samsung</td>
                    <td>Request</td>
                    <td>4</td>
                    <td>2022-04-21</td>
                    <td class="d-flex justify-content-center">
                        <a href="brand/edit" class="btn btn-outline-primary mr-5">Setujui</a>
                        <button type="button" class="btn btn-outline-danger">Tidak</button>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
