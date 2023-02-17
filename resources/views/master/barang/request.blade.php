@extends('layouts.app') @section('content')
<div class="container">
    <div class="col-md-12 mt-4">
        <h5>
            <a href="{{route('barang')}}">Master Barang</a> / <a href="{{route('barang.request.stock')}}">Request Stock Barang</a>
        </h5>
    </div>
    <div class="card mt-4">
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nomor-referensi">Nomor Referensi</label>
                            <input class="form-control" id="nomor-referensi" />
                        </div>

                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <input class="form-control" id="kategori" />
                        </div>

                        <div class="form-group">
                            <label for="uom">UOM</label>
                            <input class="form-control" id="uom" />
                        </div>

                        <div class="form-group">
                            <label for="image">Harga</label>
                            <input
                                class="form-control"
                                id="image"
                                type="text"
                            />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama-barang">Nama Barang</label>
                            <input class="form-control" id="nama-barang" />
                        </div>

                        <div class="form-group">
                            <label for="brand">Brand</label>
                            <input class="form-control" id="brand" />
                        </div>

                        <div class="form-group">
                            <label for="harga">Kode Dan Nama Barang</label>
                            <input class="form-control" id="harga" />
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <input
                                class="form-control"
                                id="status"
                                type="text"
                            />
                        </div>
                    </div>
                </div>
                <button class="btn btn-outline-info">Simpan Stock</button>
            </form>
        </div>
    </div>
</div>
@endsection