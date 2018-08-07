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
                  <a class="dropdown-item" href="{{ route('perfil') }}">
                                  {{ __('Mi Perfil') }}
                                    </a>

                  <a class="dropdown-item" href="{{ route('servicio') }}">
                        {{ __('Mis servicios') }}
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

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                          </form>
        </li>


      </ul>


    </div>

    </div>
@endguest
     </nav>
