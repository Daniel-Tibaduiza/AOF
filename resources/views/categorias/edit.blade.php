@extends('layouts.app')
@section('contents')

<h1>@lang('es.categorias.update_title')</h1>

<form method="POST" class="needs-validations" action="/categoria/{{ $categoria->id}}"
enctype="multipart/form-data" novalidate >
{{ csrf_field() }}
  @csrf
  @method('put')
  <div class="form-row row"> 
  
 
</div>
  <div class="form-row">
  <div class="col-6">
    <label >@lang('es.categorias.name')</label>
      <input type="text" id="name" name="name" class="form-control @error ('name') is-invalid @enderror " value="{{ old('name')}} {{$categoria->name}}" />

      @error('name')
      <span class="invalid-feedback" role="alert">
      <b>{{$message}}</b>
      </span>
      @enderror
  </div>

    <div class="col-12">
    <label>@lang('es.product.description')</label>
    <textarea name="description" id="description" class="form-control @error ('value') is-invalid @enderror ">{{$categoria->description}}</textarea>
    @error('description')
      <span class="invalid-feedback" role="alert">
      <b>{{$message}}</b>
      </span>
      @enderror
    </div>
  </div>
  <button>Enviar</button>
</form>

@endsection