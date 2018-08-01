
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
@guest
     <div class="container">
       <a class="navbar-brand" href="./"><b>Servici.Ar</b></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">

     <ul class="navbar-nav mr-auto">

     <li class="nav-item">
             <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
             </li>

     <li class="nav-item">
             <a class="nav-link" href="../../login">Login</a>
           </li>
     <li class="nav-item">
               <a class="nav-link" href="../../register">Registrate</a>
           </li>

         </ul>

     <form class="form-inline my-2 my-lg-0">
           <input class="form-control mr-sm-2" type="text" placeholder="Encontra lo que buscas..." aria-label="Buscar ...">
           <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Busca tu servicio</button>
         </form>

       </div>

       </div>
@else

  <div class="container">
    <a class="navbar-brand" href="./"><b>Servici.Ar</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

  <ul class="navbar-nav mr-auto">

          <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    Bienvenide {{ Auth::user()->nombre }}  <span class="caret"></span>
                  </a>

                <div class="dropdown-menu dropdown" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}">
                                  {{ __('Mi Perfil') }}
                                    </a>

                  <a class="dropdown-item" href="{{ route('servicio') }}">
                        {{ __('Mis servicios') }}
                  </a>

                  <a class="dropdown-item" href="{{ route('logout') }}">
                                  {{ __('Mis Contrataciones') }}
                                    </a>

                  <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar sesión') }}
                                      </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                      </form>
                          </div>
                              </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('logout') }}"
           onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
                    {{ __('Cerrar sesión') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                          </form>
        </li>


      </ul>

  <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Encontra lo que buscas..." aria-label="Buscar ...">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Busca tu servicio</button>
      </form>

    </div>

    </div>
@endguest
     </nav>

{{-- <header class="main.header">

    <nav class="menu">

      @if(true)

      <li><a href="index.php">Home</a></li>
      <li> | </li>
      <li><a href="login.php">Login</a></li>
      <li> | </li>
      <li><a href="formulario.php">Registrate</a></li>

      @else

      <li><a href="#">¡Bienvenido!</a></li>
      <li> | </li>
      <li><a href="index.php">Home</a></li>
      <li> | </li>
      <li><a href="logout.php">Cerrar Sesion</a></li>

      @endif
    </nav>

</header> --}}
