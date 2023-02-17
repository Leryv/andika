@extends('layouts.app') @section('content')

<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
            <div class="card shadow rounded-lg">
                <div class="card-body">
                    <form action="">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nomor-referensi">Nama Barang</label>
                                    <input class="form-control" id="nomor-referensi" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nomor-referensi">Brand</label>
                                    <select class="form-control">
                                        <option>Large select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nomor-referensi">UOM</label>
                                    <select class="form-control">
                                        <option>Large select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nomor-referensi">Harga</label>
                                    <input class="form-control" id="nomor-referensi" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nomor-referensi">Jumlah Stock</label>
                                    <input class="form-control" id="nomor-referensi" />
                                </div>
                            </div>

                            <div class="col-md-2">
                                <button class="btn btn-outline-primary">Simpan Stock</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection