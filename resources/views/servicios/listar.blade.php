@extends('plantilla-final.plantillaGeneral')

@section('contenido') <br>

    <div class="card">

  <h3 class="card-header">Listado de servicios</h3>
  <div class="card-body">

    <div class="container">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Rubro</th>
            <th>Descripción</th>
            <th>Comandos</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($servicios as $servicio)
          <tr>

            <td>{{$servicio->rubro}}</td>
            <td>{{$servicio->descripcion}}</td>
            <td><span class="badge badge-info" href="/servicio/editar/{{$servicio->id}}"><a class="nav-link active" href="/servicio/editar/{{$servicio->id}}">Editar</a></span>
                <span class="badge badge-danger" href="/servicio/eliminar/{{$servicio->id}}"><a class="nav-link active" href="/servicio/eliminar/{{$servicio->id}}">Eliminar</a></td></span>
                <style media="screen">
                  span a {
                    text-decoration: none;
                    color: white;
                    :h
                  }
                  :hover span a {
                    color: white;
                  }
                </style>


          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

<br>
    <a href="/servicio/agregar" class="btn btn-dark">Agregar Servicio</a>
  </div>
</div>

@endsection
