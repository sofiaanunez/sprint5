<!DOCTYPE html>
<html>
  <head>
    <title>Servici.AR</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link type="text/css" rel="stylesheet" media="all" href="/css/estilo.css" id="estilo2_css" />

       </head>
         <title></title>
       <body>

    @include('plantillaIndex.headerIndex')


    <div class="jumbotron jumbotron-fluid">
      <style>
        .jumbotron{ background-image: url('http://i66.tinypic.com/20j2zhy.jpg'); background-size: cover; height: 100%;}
      </style>

      <div class="container" id="indexContainer">
        <h1>servici.AR</h1>
        <div class="container" id="contador"></div>
        <br>
        <button type="button" class="btn btn-secondary btn-sm" id="btnThemeChanged"><i class="fas fa-paint-brush" id="pincel"></i></button>

        <br><br>
    		<h3>Todo lo que buscas ¡En un solo lugar!</h3><br>
        <form>
          <div class="input-group mb-3">
            <input type="text" class="form-control" id="buscador" placeholder="Encontra lo que buscas..." aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button type="button" id='otroBuscador' class="btn btn-dark">Buscar</button>
            </div>
          </div>
        </form>
      </div>
    </div>


    <section class="opciones">
      <br><br>
        <img src="/ecommerce-banner.jpg" alt="" width="400">

      <style>

          /* Remove the jumbotron's default bottom margin */
           .jumbotron {
            margin-bottom: 0;
          }


        </style>


      </head>
      <body>

        <script src="/js/ajax.js"></script>

      <div class="container">
        <div class="row">

          @foreach ($mostrar as $servicio)
          <div class="col-sm-4">
            <div class="panel panel-primary">

              <div class="panel-heading"><h4>{{$servicio->rubro}}</h4></div>
            <div class="panel-footer"><h6>{{$servicio->descripcion}}</h6></div>
            </div>
          </div>

          @endforeach

        </div>

      </div><br><br>

      {{ $mostrar->links() }}


            @include('plantilla-final.footer')

            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
              <!--<script src="js/theme.js"></script>-->

  </body>
</html>
