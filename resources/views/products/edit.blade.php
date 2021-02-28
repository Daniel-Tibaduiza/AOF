@extends('layouts.app')
@section('contents')

<h1>@lang('es.product.update_title')</h1>

<form method="POST" class="needs-validations" action="/product/{{$product->id}}"
enctype="multipart/form-data" novalidate >
{{ csrf_field() }}
  @csrf
  @method('put')
  <div class="form-row row"> 
  <div class="col-5 col-md-6 col-sm-6">
  <label >Imagen</label>
  <input type="file" name="productcover" class="form-control">
  </div>
  <div class="col-5 col-md-6 col-sm-6">
<img src="{{ url(Storage::url($product->image))}}" width="80" class="img-fluid">
  </div>

</div>
  <div class="form-row">
  <div class="col-6">
    <label >@lang('es.product.name')</label>
      <input type="text" id="name" name="name" class="form-control @error ('name') is-invalid @enderror " value="{{ old('name')}} {{$product->name}}" />

      @error('name')
      <span class="invalid-feedback" role="alert">
      <b>{{$message}}</b>
      </span>
      @enderror
  </div>

    <div class="col-6">
    <label >@lang('es.product.value')</label>
      <input type="text" id="value" name="value" class="form-control @error ('value') is-invalid @enderror " value="{{ old('value')}}{{$product->value}} "/>

      @error('value')
      <span class="invalid-feedback" role="alert">
      <b>{{$message}}</b>
      </span>
      @enderror
    </div>

    <div class="col-6">
    <label >@lang('es.product.status')</label>
      <select id="status" name="status" class="form-control">
      <option value="Activo">Activo</option>
      <option value="Inactivo">Inactivo</option>
      </select>
   </div>

   <div class="col-12 col-sm-4 col-md-4">
    <label >@lang('es.categorias.name')</label>
      <select id="category_id" name="category_id" class="form-control">

      @foreach($category as $cat)
      <option value="{{$cat->namecate}}">{{$cat->namecate}}</option>
      @endforeach
      </select>
   </div>


    <div class="col-12">
    <label>@lang('es.product.description')</label>
    <textarea name="description" id="description" class="form-control @error ('value') is-invalid @enderror ">{{$product->description}}</textarea>
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