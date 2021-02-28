@extends('layouts.app')
@section('contents')


<h1 class="text-center mt-5"> @lang('es.categorias.create_title')</h1>
<form method="POST" class="needs-validations" action="/category"
enctype="multipart/form-data" novalidate >
  @csrf

  <div class="form-row mt-4 row">
  <div class="col-12 col-sm-4 col-md-4">
    <label >@lang('es.categorias.name')</label>
      <input type="text" id="namecate" name="namecate" class="form-control @error ('namecate') is-invalid @enderror " value="{{ old('namecate')}}" />

      @error('namecate')
      <span class="invalid-feedback" role="alert">
      <b>{{$message}}</b>
      </span>
      @enderror
  </div>

    <div class="col-12">
    <label>@lang('es.categorias.description')</label>
    <textarea name="descriptioncate" id="descriptioncate" class="form-control @error ('descriptioncate') is-invalid @enderror "></textarea>
    @error('descriptioncate')
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
