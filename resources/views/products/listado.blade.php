@extends('layouts.app')
@section('contents')

<div class="d-flex justify-content-end">
</div>


<div>
<h1 class="text-center mt-3">
{{__('es.product.list_products_tittle')}}

</h1>


<div class="row card-fila">
@foreach ($products as $prod)

<div class="col-md-3 sect-prod">
    <div class="card text-center">
    
      <img src="{{ url(Storage::url($prod->image))}}"  max-width="100%" class="card-img-top" alt="...">
    
        <h4 class="card-title">{{$prod->name}}</h4>
        <p class="card-text">{{$prod->value }}</p>
        <p class="card-text">{{$prod->status }}</p>
        <p class="card-text">{{$prod->category_id }}</p>
        <a type="button" class="btn btn-success" href="/"> <span class="material-icons">
Comprar
</span> </a>
    </div>

</div>

@endforeach

</div>





</div>
@endsection
