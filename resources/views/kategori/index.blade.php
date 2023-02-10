@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5 ">
        <div class="col-md-12 d-flex align-items-center">
            <table class="table table-bordered ">
            <thead>
                <tr>
                    <th scope="col">Kode Kategori</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Option</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">KTG/20220403/001</th>
                    <td>Makanan Kemasan</td>
                    <td class="d-flex justify-content-center align-items-center">
                        <button type="button" class="btn btn-outline-warning mr-5">Warning</button>
                        <button type="button" class="btn btn-outline-danger">Danger</button>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
