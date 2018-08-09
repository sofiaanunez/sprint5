@extends('plantilla-final.plantillaGeneral')

@section('contenido')
<strong>{{ $errors->first('avatar') }}</strong>

<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Datos Personales') }}</div>


                <div class="card-body">
                    <form method="POST" id="register" action="{{ route('register') }}" aria-label="{{ __('Register') }}"  files="true" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" required autofocus>


                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="apellido" type="text" class="form-control{{ $errors->has('apellido') ? ' is-invalid' : '' }}" name="apellido" value="{{ old('apellido') }}" required autofocus>


                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('apellido') }}</strong>
                                    </span>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fecha_nacimiento" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de nacimiento') }}</label>

                            <div class="col-md-6">
                                <input id="fecha_nacimiento" type="date" class="form-control{{ $errors->has('fecha_nacimiento') ? ' is-invalid' : '' }}" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required autofocus>


                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fecha_nacimiento') }}</strong>
                                    </span>

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>


                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>


                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Repetir contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="profesion" class="col-md-4 col-form-label text-md-right">{{ __('Profesión') }}</label>

                            <div class="col-md-6">
                                <input id="profesion" type="text" class="form-control{{ $errors->has('profesion') ? ' is-invalid' : '' }}" name="profesion" value="{{ old('profesion') }}" required autofocus>


                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('profesion') }}</strong>
                                    </span>

                            </div>
                        </div>
                      </div>

                            <label for="ciudad" class="col-md-4 col-form-label text-md-left">{{ __('Seleccione una localidad') }}</label> <select class="form-control" id="sel1" name="ciudad" value ="{{ old('ciudad') }}" required autofocus>
                              <option></option>
                              <option>Capital Federal</option>
                              <option>Gran Buenos Aires</option>
                              <option>Moron</option>
                              <option>Haedo</option>
                              <option>Gregorio de Laferrere</option>
                              <option>San Justo</option>
                              <option>Ciudad Evita</option>
                            </select>
                              @if ($errors->has('ciudad'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('ciudad') }}</strong>
                                  </span>
                              @endif
                              <br>

                                <div class="form-group">
                                    <label>Carga tu foto de perfil</label>
                                    <input type="file" name="avatar" >
                                </div>
                                @if ($errors->has('avatar'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                                @endif

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4-right">
                                        <button type="submit" id="botonRegistrar" class="btn btn-primary">
                                            {{ __('Registrar') }}
                                        </button><br>
                                    </div>

                            </div>
                            <br>


                        </div>

                    </form>
                </div>
            </div>
          </div>

<br>
<script src="/js/register.js">

</script>
@endsection
