@extends('layouts.app')
@section('contents')

<h1>@lang('es.categorias.update_title')</h1>

<form method="POST" class="needs-validations" action="/category/{{ $categories->id}}"
enctype="multipart/form-data" novalidate >
  {{ csrf_field() }}
  @csrf
@method('put')
  <div class="form-row mt-4 row">
  <div class="col-12 col-sm-4 col-md-4">
    <label >@lang('es.product.name')</label>
      <input type="text" id="namecate" name="namecate" class="form-control @error ('namecate') is-invalid @enderror " value="{{ old('namecate')}}{{ $categories->namecate}}" />

      @error('namecate')
      <span class="invalid-feedback" role="alert">
      <b>{{$message}}</b>
      </span>
      @enderror
  </div>

    <div class="col-12">
    <label>@lang('es.product.description')</label>
    <textarea name="descriptioncate" id="descriptioncate" class="form-control @error ('descriptioncate') is-invalid @enderror "> {{ $categories->descriptioncate}} </textarea>
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

