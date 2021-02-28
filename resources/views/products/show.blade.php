@extends('layouts.app')
@section('contents')

<div class="d-flex justify-content-center">
<div class="card mb-3" style="max-width: 45rem;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{ url(Storage::url($product->image))}}" class="card-img-top" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ $product->name}}</h5>
        <p class="card-text">{{$product ->description}}</p>
        
      </div>
    </div>
  </div>
  <div class="row no-gutters">
  <div class="col-12">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><b> @lang('es.product.value')</b>{{ $product->value}}</li>
    <li class="list-group-item"><b> @lang('es.product.status')</b>{{ $product->status}}</li>

  </ul>
  </div>
  </div>
</div>
</div>
@endsection