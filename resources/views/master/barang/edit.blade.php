@extends('layouts.app') @section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-5">
            <div class="card shadow border-0">
                <div class="card-body rounded-lg">
                    <form action="">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">                            
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nama Barang</label>
                                    <input type="text" name="nama_barang" value="{{ old('nama_barang')}}" class="form-control" id="exampleFormControlInput1" placeholder="Please Input Name">
                                </div>
                            </div>
                            <div class="col-md-6">                            
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Brand</label>
                                    <input type="text" name="brand" value="{{ old('brand')}}" class="form-control" id="exampleFormControlInput1" placeholder="Please Input Name">
                                </div>
                            </div>
                            <div class="col-md-6">                            
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">UOM</label>
                                    <input type="text" name="satuan" value="{{ old('satuan')}}" class="form-control" id="exampleFormControlInput1" placeholder="Please Input Name">
                                </div>
                            </div>
                            <div class="col-md-6">                            
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Harga</label>
                                    <input type="text" name="harga" value="{{ old('harga')}}" class="form-control" id="exampleFormControlInput1" placeholder="Please Input Name">
                                </div>
                            </div>
                            <div class="col-md-6">                            
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Jumlah Stock</label>
                                    <input type="text" name="stock" value="{{ old('stock')}}" class="form-control" id="exampleFormControlInput1" placeholder="Please Input Name">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-outline-primary">Simpan Stock</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection