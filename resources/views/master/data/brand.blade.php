@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-12">
            <a href="{{route('brand')}}">Master Data</a> / <a href="{{route('brand.brand')}}">Edit Brand</a>
        </div>
        <div class="col-md-6 d-flex align-items-center mt-5">
            <div class="form-group">
                <label for="brand">Nama Brand</label>
                <input type="text" name="brand" value="{{old('brand')}}" id="brand" class="form-control {{ $errors->has('brand') ? 'is-invalid' : '' }}" placeholder="Brand...">
                <!-- @if ($errors->has('email'))
                <span class="invalid-feedback pl-5" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
                <span>   
                @endif -->
                <button type="submit" class="btn btn-outline-primary mt-2">
                    Simpan
                </button>
            </div>
        </div>
        <div class="col-md-6 d-flex align-items-center">
            <table class="table table-bordered ">
            <thead>
                <tr>
                    <th scope="col">Kode Kategori</th>
                    <th scope="col">Nama </th>
                    <th scope="col">Option</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">BRND/20220403/001</th>
                    <td>Kawasaki</td>
                    <td class="d-flex justify-content-center align-items-center">
                        <button type="button" class="btn btn-outline-warning mr-5">Edit Satuan</button>
                        <button type="button" class="btn btn-outline-danger">Hapus Satuan</button>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
