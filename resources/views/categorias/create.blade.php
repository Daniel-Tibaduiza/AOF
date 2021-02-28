@extends('layouts.app')
@section('contents')

<h1 class="text-center mt-5"> @lang('es.categorias.create_title')</h1>
<form method="POST" class="needs-validations" action="/categoria"
enctype="multipart/form-data" novalidate >
  @csrf

  
  <div class="form-row mt-4 row">
  <div class="col-12 col-sm-4 col-md-4">
    <label >@lang('es.categorias.name')</label>
      <input type="text" id="name" name="name" class="form-control @error ('name') is-invalid @enderror " value="{{ old('name')}}" />

      @error('name')
      <span class="invalid-feedback" role="alert">
      <b>{{$message}}</b>
      </span>
      @enderror
  </div>

    <div class="col-12">
    <label>@lang('es.categorias.description')</label>
    <textarea name="description" id="description" class="form-control @error ('value') is-invalid @enderror "></textarea>
    @error('description')
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
