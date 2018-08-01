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
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}"  files="true" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="apellido" type="text" class="form-control{{ $errors->has('apellido') ? ' is-invalid' : '' }}" name="apellido" value="{{ old('apellido') }}" required autofocus>

                                @if ($errors->has('apellido'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('apellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fecha_nacimiento" class="col-md-4 col-form-label text-md-right">{{ __('Fecha') }}</label>

                            <div class="col-md-6">
                                <input id="fecha_nacimiento" type="date" class="form-control{{ $errors->has('fecha_nacimiento') ? ' is-invalid' : '' }}" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required autofocus>

                                @if ($errors->has('fecha_nacimiento'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fecha_nacimiento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="profesion" class="col-md-4 col-form-label text-md-right">{{ __('Profesion') }}</label>

                            <div class="col-md-6">
                                <input id="profesion" type="text" class="form-control{{ $errors->has('profesion') ? ' is-invalid' : '' }}" name="profesion" value="{{ old('profesion') }}" required autofocus>

                                @if ($errors->has('profesion'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('profesion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                      </div>
                        <div class="form-group row">
                            <label for="genero" class="col-md-4 col-form-label text-md-right">{{ __('Genero') }}</label>
                            <div class="col-md-6">
                              @php $generos = ['Masculino', 'Femenino','Otro',];@endphp
                              @foreach($generos as $genero)
                                <input id="genero" type="radio" class="" name="genero" value="{{ old('genero') }}" autofocus {{ old('genero') }} selected ? > <label for="">{{ $genero }}</label> <br>
                                @endforeach
                            </div>
                        </div>


                          <label for="pais" class="col-md-4 col-form-label text-md-left">{{ __('Seleccione un Pais') }}</label> <select class="form-control" id="pais" name="pais" value ="pais"   required autofocus>
                            <option></option>
                            <option selected ? $ele == {{ old('pais') }} >Argentina</option>
                            <option>Brasil</option>
                            <option>Chile</option>
                            <option>Colombia</option>
                            <option>Paraguay</option>
                            <option>Uruguay</option>

                          </select>

                          @if ($errors->has('pais'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('pais') }}</strong>
                              </span>
                          @endif

                          <label for="provincia" class="col-md-4 col-form-label text-md-left">{{ __('Seleccione una Provincia') }}</label> <select class="form-control" id="sel1" name="provincia" value ="{{ old('provincia') }}" required autofocus>
                              <option></option>
                              <option>Buenos Aires</option>
                              <option>Santa Fe</option>
                              <option>Catamarca</option>
                              <option>Corrientes</option>
                              <option>Entre Rios</option>
                              <option>Santiago del Estero</option>
                              <option>Santa Cruz</option>
                          </select>
                            @if ($errors->has('provincia'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('provincia') }}</strong>
                                </span>
                            @endif

                            <label for="ciudad" class="col-md-4 col-form-label text-md-left">{{ __('Seleccione una Ciudad') }}</label> <select class="form-control" id="sel1" name="ciudad" value ="{{ old('ciudad') }}" required autofocus>
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

                            </div>
                            <br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4-right">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button><br>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
          </div>

<br>
@endsection
