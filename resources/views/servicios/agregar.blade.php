@extends('plantilla-final.plantillaGeneral')

@section('contenido')
@guest
<br>

<div class="jumbotron">
  <h1 class="display-4">Hola!</h1>
  <p class="lead">Para poder agregar un servicio, debe estar logueado.</p>
  <hr class="my-4">
  <p>En caso de no tener cuenta.<a href="../../register"> Registrarse</a></p>
  <a class="btn btn-primary btn-lg" href="../../login" role="button">Iniciar sesión</a>
</div>
<br>

    @else
      {{-- @if(count($errors)>0)
        <div class="">
        <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
        </div>
      @endif --}}

  <form class="" id="servicios" action="/servicio/agregar" method="post" enctype="multipart/form-data"><br>
    <script src="/js/servicios.js"></script>

    <h3 class="text-center">Agrega tu servicio!</h3>
    <br>
    <div class="container">
      {{ csrf_field() }}

      <div class="form-group row">
          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Rubro') }}</label>

          <div class="col-md-4">
              <input id="rubro" type="text" class="form-control{{ $errors->has('rubro') ? ' is-invalid' : '' }}" name="rubro" value="{{ old('rubro') }}" required autofocus>


                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('rubro') }}</strong>
                  </span>

          </div></div>

          <div class="form-group row">
          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
          <div class="col-md-4">
              <input id="descripcion" type="text" class="form-control{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" name="descripcion" value="{{ old('descripcion')}}" required autofocus>


                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('descripcion') }}</strong>
                  </span>

          </div></div>

          <div class="form-group row">
          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Duración (cantidad de días)') }}</label>
          <div class="col-md-4">
              <input id="duracion" type="text" class="form-control{{ $errors->has('duracion') ? ' is-invalid' : '' }}" name="duracion" value="{{ old('duracion') }}" required autofocus>


                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('duracion') }}</strong>
                  </span>

          </div></div>

          <div class="form-group row">
          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>
          <div class="col-md-4">
              <input id="monto" type="text" class="form-control{{ $errors->has('monto') ? ' is-invalid' : '' }}" name="monto" value="{{ old('monto') }}" required autofocus>


                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('monto') }}</strong>
                  </span>

          </div></div>

          <br>

                <a class="btn btn-dark" id='botonServicios' href="/servicio" role="button">Volver atrás</a>
                <button class="btn btn-dark" id='botonServicios' type="submit">Agregar</button>

          </div><br>
      </form>
  @endguest
@endsection
