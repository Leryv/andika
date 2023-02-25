@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-12">
            <a href="">Master Data</a> /
            <a href="{{ route('brand') }}">Edit brand</a>
        </div>
        <div class="col-md-4 mt-5">
            <form action="">
                <div class="form-group">
                    <label for="status">Brand</label>
                    <input
                        type="text"
                        name="status"
                        value="{{ old('phone') }}"
                        id="phone"
                        class="form-control{{ $errors->has('phone') ? 'is-invalid' : '' }}"
                    />
                    <!-- @if ($errors->has('phone'))
                        <span class="invalid-feedback pl-5" role="alert">
                        <strong>{{ $errors->first('phone') }}</strong>
                        <span>   
                        @endif -->
                </div>
            </form>
        </div>
        <div class="col-md-8 mt-5 d-flex align-items-center">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Kode Brand</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse( $brand as $brands)
                    <tr>
                        <th scope="row">{{$brands->kode_brand}}</th>
                        <td>{{$brands->nama_brand}}</td>
                        <td
                            class="d-flex justify-content-center align-items-center"
                        >
                            <button
                                type="button"
                                class="btn btn-outline-warning mr-5"
                            >
                                Edit Brand
                            </button>
                            <button
                                type="button"
                                class="btn btn-outline-danger"
                            >
                                Hapus Brand
                            </button>
                        </td>
                        @empty @endforelse
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
