@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5 ">
        <div class="col-md-12 d-flex align-items-center">
            <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">Kode Brand</th>
                <th scope="col">Nama Brand</th>
                <th scope="col">Option</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">BRND/20220403/001</th>
                    <td>Kawasaki</td>
                    <td class="d-flex justify-content-center align-items-center">
                        <a href="brand/edit" class="btn btn-outline-warning mr-5">Edit Brand</a>
                        <button type="button" class="btn btn-outline-danger">Hapus Brand</button>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
