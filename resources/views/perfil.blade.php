@extends('plantilla-final.plantillaGeneral')

@section('contenido')
<br>
<div class="card">

<h3 class="card-header">Mi perfil</h3>
<div class="card-body">


<div class="container">

    <ul class="list-group">
        <li class="list-group-item"><b>Nombre: </b> {{Auth::user()->nombre}}</li>
        <li class="list-group-item"><b>Apellido:</b> {{Auth::user()->apellido}}</li>
        <li class="list-group-item"><b>Correo electrónico:</b> {{Auth::user()->email}}</li>
        <li class="list-group-item"><b>Profesión:</b> {{Auth::user()->profesion}}</li>
        <li class="list-group-item"><b>Ciudad:</b> {{Auth::user()->ciudad}}</li>
      <!--  <li class="list-group-item"><b>Avatar:</b> {{Auth::user()->avatar}}</li> -->

      </ul>

</div>
</div>
</div>


@endsection
