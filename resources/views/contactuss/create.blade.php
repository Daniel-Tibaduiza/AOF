@extends('layouts.app')
@section('contents')

<h1 class="text-center mt-5">Contactanos</h1>
<form method="POST" class="needs-validations" action="/contactt"
    enctype="multipart/form-data" novalidate >
  @csrf
 
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">@</span>
  </div>

  <input type="text" id="namecont" name="namecont" placeholder="Por favor digite su nombre" class="form-control @error ('namecont') is-invalid @enderror " value="{{ old('namecont')}}" />

@error('namecont')
<span class="invalid-feedback" role="alert">
  <b>{{$message}}</b>
</span>
@enderror

</div>

<div class="input-group mb-3">
<input type="text" id="emailcont" name="emailcont" placeholder="Por favor digite su correo electronico" class="form-control @error ('emailcont') is-invalid @enderror " value="{{ old('emailcont')}}" />
  
@error('emailcont')
            <span class="invalid-feedback" role="alert">
              <b>{{$message}}</b>
            </span>
           @enderror
  <div class="input-group-append">
    <span class="input-group-text" id="basic-addon2">@gmail.com</span>

  </div>
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">#</span>
  </div>

  <input type="text" id="phonecont" name="phonecont" placeholder="Por favor digite un numero de contacto" class="form-control @error ('phonecont') is-invalid @enderror " value="{{ old('phonecont')}}"/>

@error('phonecont')
<span class="invalid-feedback" role="alert">
<b>{{$message}}</b>
</span>
@enderror

</div>


<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Solicito información de:</span>
  </div>
  <textarea name="descriptioncont" id="descriptioncont" class="form-control @error ('descriptioncont') is-invalid @enderror "></textarea>
    @error('descriptioncont')
      <span class="invalid-feedback" role="alert">
      <b>{{$message}}</b>
      </span>
      @enderror
</div>
<div class="form-row mt-4 row mt-5">
  <div class="col-12 text-center">
  <button class="btn btn-success">Enviar</button>
  </div>
  </div>
</form>



@endsection