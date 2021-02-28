@extends('layouts.app')
@section('contents')

<div class="d-flex justify-content-end">
<a class="btn btn-success" href="/category/create"> {{__('es.categorias.create_title')}} </a>
</div>


<div>
<h1 class="text-center mt-3">
{{__('es.categorias.list_categorias_tittle')}}

</h1>
<table class="table table-bordered">
<thead>
<th scope="col">@lang('es.categorias.name')</th>
<th scope="col">@lang('es.categorias.description')</th>
<th scope="col"></th>
</thead>
<tbody>
@foreach ($categories as $categ)
<tr>
<td>{{$categ->namecate}}</td>
<td>{{$categ->descriptioncate }}</td>
<td>
<a type="button" class="btn btn-success" href="/category/{{$categ->id}}"> <span class="material-icons">
Ver
</span> </a>

<a type="button" class="btn btn-success" href="/category/{{$categ->id}}/edit"> <span class="material-icons">
Editar
</span> </a>

<form  class="btn" action="{{route('category.destroy',$categ->id)}}" method="POST">
 
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