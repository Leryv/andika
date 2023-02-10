@extends('layouts.app')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <a href="{{route('home')}}">Home</a> / <a href="">Create</a>
        </div>
        <div class="card-body">
            <form action="{{route('users.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nip">Nomer Referensi</label>
                            <input type="number" name="nip" value="{{old('nip')}}" id="nip" class="form-control {{ $errors->has('nip') ? 'is-invalid' : '' }}" placeholder="">
                            <!-- @if ($errors->has('nip'))
                            <span class="invalid-feedback pl-5" role="alert">
                                    <strong>{{ $errors->first('nip') }}</strong>
                            <span>   
                            @endif -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Nama Barang</label>
                            <input type="email" name="email" value="{{old('email')}}" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Email...">
                            <!-- @if ($errors->has('email'))
                            <span class="invalid-feedback pl-5" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                            <span>   
                            @endif -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jenis_kelamin">Kategori</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control {{ $errors->has('jenis_kelamin') ? 'is-invalid' : '' }}">
                                <option value="">Pilih Kategori</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <!-- @if ($errors->has('jenis_kelamin'))
                            <span class="invalid-feedback pl-5" role="alert">
                                    <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                            <span>   
                            @endif -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jenis_kelamin">Brand</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control {{ $errors->has('jenis_kelamin') ? 'is-invalid' : '' }}">
                                <option value="">Pilih Brand</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <!-- @if ($errors->has('jenis_kelamin'))
                            <span class="invalid-feedback pl-5" role="alert">
                                    <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                            <span>   
                            @endif -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jenis_kelamin">UOM</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control {{ $errors->has('jenis_kelamin') ? 'is-invalid' : '' }}">
                                <option value="">Pilih UOM</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <!-- @if ($errors->has('jenis_kelamin'))
                            <span class="invalid-feedback pl-5" role="alert">
                                    <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                            <span>   
                            @endif -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="jabatan">Harga</label>
                            <input type="text" name="jabatan" value="{{old('jabatan')}}" id="jabatan" class="form-control{{ $errors->has('jabatan') ? 'is-invalid' : '' }}" placeholder="Jabatan...">
                            <!-- @if ($errors->has('jabatan'))
                            <span class="invalid-feedback pl-5" role="alert">
                                    <strong>{{ $errors->first('jabatan') }}</strong>
                            <span>   
                            @endif -->
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="alamat">Image</label>
                            <input type="file" name="alamat" value="{{old('alamat')}}" id="alamat" class="form-control{{ $errors->has('alamat') ? 'is-invalid' : '' }}" >
                            <!-- @if ($errors->has('alamat'))
                            <span class="invalid-feedback pl-5" role="alert">
                                    <strong>{{ $errors->first('alamat') }}</strong>
                            <span>   
                            @endif -->

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Status</label>
                            <input type="text" name="phone" value="{{old('phone')}}" id="phone" class="form-control{{ $errors->has('phone') ? 'is-invalid' : '' }}" >
                            <!-- @if ($errors->has('phone'))
                            <span class="invalid-feedback pl-5" role="alert">
                                    <strong>{{ $errors->first('phone') }}</strong>
                            <span>   
                            @endif -->

                        </div>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-outline-primary">
                            Simpan
                        </button>
                        <!-- <a href="{{url()->previous()}}" class="btn btn-outline-secondary">
                            Cancel
                        </a> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection