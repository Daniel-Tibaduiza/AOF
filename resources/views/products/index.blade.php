@extends('layouts.app')
@section('contents')

<div class="d-flex justify-content-end">
<a class="btn btn-success" href="/product/create"> {{__('es.product.create_title')}} </a>
</div>


<div>
<h1 class="text-center mt-3">
{{__('es.product.list_products_tittle')}}

</h1>
<table class="table table-bordered">
<thead>
<th scope="col">@lang('es.product.name')</th>
<th scope="col">@lang('es.product.value')</th>
<th scope="col">@lang('es.product.status')</th>
<th scope="col"></th>
</thead>
<tbody>
@foreach ($products as $prod)
<tr>
<td>{{$prod->name}}</td>
<td>{{$prod->value }}</td>
<td>{{$prod->status}}</td>
<td>
<a type="button" class="btn btn-success" href="/product/{{$prod->id}}"> <span class="material-icons">
Ver
</span> </a>

<a type="button" class="btn btn-success" href="/product/{{$prod->id}}/edit"> <span class="material-icons">
Editar
</span> </a>

<!-- <a type="button" class="btn btn-danger" onclick="deleteProduct('{{ $prod->id}}')" > <span class="material-icons">
Eliminar   
</span></a> -->
<!-- Inicio intervencion eliminar -->
<form  class="btn" action="{{route('product.destroy',$prod->id)}}" method="POST">
 
      @csrf
      @method('DELETE')

      <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estas seguro de eliminar este producto?')">Eliminar </button>
      <!-- <a type="submit" class="btn btn-danger"  >  -->
    <!-- Eliminar

</a> -->

    </form>
<!-- Fin intervencion -->
</td>
<!-- Inicio prueba -->
<!-- <td>
    <form  class="btn btn-danger" action="{{route('product.destroy',$prod->id)}}" method="POST">
 
      @csrf
      @method('DELETE')

      <button type="submit">Eliminar </button>
    </form>

</td> -->
<!-- fin prueba -->
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection
