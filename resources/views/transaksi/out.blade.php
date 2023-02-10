@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5 ">
        <div class="col-md-12 d-flex align-items-center">
            <table class="table table-bordered fixed">
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
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="d-flex">
                        <!-- <a href="brand/edit" class="btn btn-outline-primary mr-5">Setujui</a>
                        <button type="button" class="btn btn-outline-danger">Tidak</button> -->
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
