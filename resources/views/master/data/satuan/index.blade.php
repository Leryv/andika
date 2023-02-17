@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5 ">
        <div class="col-md-12">
            <a href="">Master Data</a> / <a href="{{route('satuan')}}"> Satuan</a>
        </div>
            <div class="col-md-4 mt-4">
                <form action="">
                    <div class="form-group">
                        <label for="status">Satuan</label>
                        <input type="text" name="status" value="{{old('phone')}}" id="phone" class="form-control{{ $errors->has('phone') ? 'is-invalid' : '' }}">
                        <!-- @if ($errors->has('phone'))
                        <span class="invalid-feedback pl-5" role="alert">
                        <strong>{{ $errors->first('phone') }}</strong>
                        <span>   
                        @endif -->
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th scope="col">Kode Satuan</th>
                            <th scope="col">Nama </th>
                            <th scope="col">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">KTG/20220403/001</th>
                            <td>Makanan Kemasan</td>
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
