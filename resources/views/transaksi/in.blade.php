@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-12">
            <div class="card shadow rounded-lg">
                <div class="card-body">
                    <div class="col-md-12 d-grid align-items-center">
                        <div class="alert alert-danger" role="alert">
                            Request Barang Akan Masuk Ke Dalam Table Ini
                        </div>
                        <table class="table table-bordered fixed responsive">
                            <thead>
                                <tr>
                                    <th scope="col">Referensi</th>
                                    <th scope="col">Supplier</th>
                                    <th scope="col">Jumlah Permintaan</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($transaksi as $transaksis)
                                <tr>
                                    <th scope="row">
                                        {{$transaksis -> kode_permintaan}}
                                    </th>
                                    <td>
                                        {{$transaksis->barang->brand->nama_brand}}
                                    </td>
                                    <td>{{$transaksis -> jumlah}}</td>
                                    <td>{{$transaksis->created_at}}</td>
                                    <td>{{$transaksis->total}}</td>
                                    <td class="d-flex justify-content-center">
                                        <a
                                            href="brand/edit"
                                            class="btn btn-outline-primary mr-5"
                                            >Setujui</a
                                        >
                                        <button
                                            type="button"
                                            class="btn btn-outline-danger"
                                        >
                                            Tidak
                                        </button>
                                    </td>
                                </tr>
                                @empty @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
