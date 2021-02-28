@extends('layouts.app')
@section('contents')
<a href="/categoria/create"> {{__('es.categorias.create_title')}} </a>

<div>
<h1 class="text-center mt-3">
{{__('es.categorias.list_categorias_tittle')}}

</h1>
<table class="table table-bordered">
<thead>
<th scope="col">@lang('es.categorias.name')</th>
<th scope="col">@lang('es.categorias.description')</th>
<!-- <th scope="col">@lang('es.categorias.status')</th> -->
<th scope="col"></th>
</thead>
<tbody>
@foreach ($categorias as $cate)
<tr>
<td>{{$cate->name}}</td>
<td>{{$cate->description }}</td>
<td>{{$cate->status}}</td>
<td>
<a type="button" class="btn btn-success" href="/categorias/{{$cate->id}}"> <span class="material-icons">
Ver
</span> </a>

<a type="button" class="btn btn-success" href="/categorias/{{$cate->id}}/edit"> <span class="material-icons">
Editar
</span> </a>


<!-- Inicio intervencion eliminar -->
<form  class="btn" action="{{route('categoria.destroy',$cate->id)}}" method="POST">
 
      @csrf
      @method('DELETE')

      <button type="submit" class="btn btn-danger">Eliminar </button>
  
    </form>
<!-- Fin intervencion -->
</td>

</tr>
@endforeach
</tbody>
</table>
</div>
@endsection
