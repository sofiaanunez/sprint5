
<!DOCTYPE html>
<html>
  <head>
    <title>Servici.AR</title>
      <meta charset="utf-8">

         <link rel="stylesheet" href="/css/estilo.css">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
         <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="/css/estilo.css">

       </head>
         <title></title>
       <body>

         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    @include('plantillaIndex.headerIndex')


    <div class="jumbotron jumbotron-fluid">
      <style>
        .jumbotron{ background-image: url('http://i66.tinypic.com/20j2zhy.jpg'); background-size: cover; height: 100%;}
      </style>



      <div class="container">
        <h1>servici.AR</h1>
        <br>
    		<h3>Todo lo que buscas ¡En un solo lugar!</h3><br>
        <form>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Encontra lo que buscas..." aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button type="button" class="btn btn-dark">Buscar</button>
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



      <div class="container">
        <div class="row">

          @foreach ($mostrar as $servicio)
          <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading">{{$servicio->rubro}}</div>
              <div class="panel-footer">{{$servicio->descripcion}}</div>
            </div>
          </div>

          @endforeach

        </div>

      </div><br><br>

      {{ $mostrar->links() }}


            @include('plantilla-final.footer')

  </body>
</html>
