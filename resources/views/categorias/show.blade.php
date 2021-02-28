@extends('layouts.app')
@section('contents')

<div class="d-flex justify-content-center">
<div class="card mb-3" style="max-width: 45rem;">
  <div class="row no-gutters">
    
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ $categoria->name}}</h5>
        <p class="card-text">{{$categoria ->description}}</p>
        
      </div>
    </div>
  </div>
  <div class="row no-gutters">
  <div class="col-12">

  </div>
  </div>
</div>
</div>
@endsection