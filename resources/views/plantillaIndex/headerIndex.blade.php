<header>
   <nav>

     <div class="btn-group float-right">
         <!-- Authentication Links -->
         @guest
             <li class="nav-item">
                 <a class="nav-link" href="{{ route('login') }}">{{ __('Logueate') }}</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="{{ route('register') }}">{{ __('Registrate') }}</a>
             </li>
         @else

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
           @endguest
     </div>
   </nav>
 </header>
