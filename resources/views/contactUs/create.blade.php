@extends('layouts.app')
@section('contents')


<h1>A ingresado al create de contactenos</h1>

<form method="POST" class="needs-validations" action="/contact"
enctype="multipart/form-data" novalidate >
  @csrf
  
  <div class="form-row mt-4 row">
  <div class="col-12 col-sm-4 col-md-4">
    <label >@lang('es.product.name')</label>
      <input type="text" id="namecon" name="namecon" class="form-control @error ('namecon') is-invalid @enderror " value="{{ old('namecon')}}" />

      @error('namecon')
      <span class="invalid-feedback" role="alert">
      <b>{{$message}}</b>
      </span>
      @enderror
  </div>
  <div class="col-12 col-sm-4 col-md-4">
    <label >@lang('es.product.name')</label>
      <input type="text" id="emailcon" name="emailcon" class="form-control @error ('emailcon') is-invalid @enderror " value="{{ old('emailcon')}}" />

      @error('emailcon')
      <span class="invalid-feedback" role="alert">
      <b>{{$message}}</b>
      </span>
      @enderror
  </div>
  

    <div class="col-12 col-sm-4 col-md-4">
    <label >@lang('es.product.value')</label>
      <input type="text" id="phonecon" name="phonecon" class="form-control @error ('phonecon') is-invalid @enderror " value="{{ old('phonecon')}}"/>

      @error('phonecon')
      <span class="invalid-feedback" role="alert">
      <b>{{$message}}</b>
      </span>
      @enderror
    </div>

    <div class="col-12">
    <label>@lang('es.product.description')</label>
    <textarea name="descriptioncon" id="descriptioncon" class="form-control @error ('descriptioncon') is-invalid @enderror "></textarea>
    @error('descriptioncon')
      <span class="invalid-feedback" role="alert">
      <b>{{$message}}</b>
      </span>
      @enderror
    </div>
    
  </div>
  <div> 
  
  <div class="form-row mt-4 row mt-5">
  <div class="col-12 text-center">
  <button class="btn btn-success">Enviar</button>
  </div>
  </div>
  
</form>

@endsection
