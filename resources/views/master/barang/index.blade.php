@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <h5 class="col-md-12">
            <a href="{{ route('barang') }}">Master Barang</a>
            /
            <span>Index</span>
        </h5>
        <div class="col-md-12 d-flex align-items-center mt-3">
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
                        @forelse( $barangs as $barang)
                        <th scope="row">{{$barang->no_reg}}</th>
                        <td>{{$barang->nama}}</td>
                        <td>{{$barang->brand->nama_brand}}</td>
                        <td>{{$barang->satuan->nama_satuan}}</td>
                        <td>{{$barang->harga}}</td>
                        <td>{{$barang->quantity}}</td>
                        <td
                            class="d-flex justify-content-center align-items-center"
                        >
                            <button
                                type="button"
                                class="btn btn-outline-warning mr-5"
                            >
                                Edit Barang
                            </button>
                            <button
                                type="button"
                                class="btn btn-outline-danger"
                            >
                                Hapus Barang
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
