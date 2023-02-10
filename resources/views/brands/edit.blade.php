@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-5 ">
        <div class="col-md-12 d-flex align-items-center">
            <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Nama Brand</label>
                            <input type="text" name="phone" value="{{old('phone')}}" id="phone" class="form-control{{ $errors->has('phone') ? 'is-invalid' : '' }}">
                            <!-- @if ($errors->has('phone'))
                            <span class="invalid-feedback pl-5" role="alert">
                                    <strong>{{ $errors->first('phone') }}</strong>
                            <span>   
                            @endif -->

                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
