@extends('layouts.app')
@section('contents')

<div class="d-flex justify-content-center">
<div class="card mb-3" style="max-width: 45rem;">
  <div class="row no-gutters">
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ $categories->namecate}}</h5>
        <p class="card-text">{{$categories->descriptioncate}}</p>
        
      </div>
    </div>
  </div>
  <div class="row no-gutters">
  <div class="col-12">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><b> @lang('es.categorias.name')</b>{{ $categories->namecate}}</li>
    <li class="list-group-item"><b> @lang('es.categorias.description')</b>{{ $categories->descriptioncate}}</li>

  </ul>
  </div>
  </div>
</div>
</div>
@endsection