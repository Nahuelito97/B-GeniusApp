<div class="navbar-lateral full-reset">
    <div class="visible-xs font-movile-menu mobile-menu-button"></div>
    <div class="full-reset container-menu-movile nav-lateral-scroll">
        <div class="logo full-reset all-tittles">
            <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button"
            style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i>
            B-Genius
        </div>
        <div class="nav-lateral-divider full-reset"></div>
        <div class="full-reset" style="padding: 10px 0; color:#fff;">
            <figure>
                <img src="{{asset('front-end/assets/img/logo.png')}}" alt="Biblioteca"
                class="img-responsive center-box" style="width:55%;">
            </figure>
            <p class="text-center" style="padding-top: 15px;">Sistema Bibliotecario</p>
        </div>
        <div class="nav-lateral-divider full-reset"></div>
        <div class="full-reset nav-lateral-list-menu">
            <ul class="list-unstyled">
                <li><a href="{{ route('home') }}"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                <li>
                  <div class="dropdown-menu-button"><i class="zmdi zmdi-case zmdi-hc-fw"></i>&nbsp;&nbsp; Administración <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                  <ul class="list-unstyled">
                      <li><a href="{{route('categorias.crear')}}"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Nueva categoría</a></li>
                      <li><a href="{{route('categorias')}}"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Categorías</a></li>
                  </ul>
                </li>
                <li>
                   <div class="dropdown-menu-button"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Registro de usuarios <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                   <ul class="list-unstyled">
                     <li><a href="{{ route('clientes') }}"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Clientes</a></li>
                     <li><a href="{{ route('clientes.crear') }}"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo Cliente</a></li>
                   </ul>
                </li>
                <li>
                  <div class="dropdown-menu-button"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>&nbsp;&nbsp; Libros <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                  <ul class="list-unstyled">
                      <li><a href="{{ route('libros') }}"><i class="zmdi zmdi-bookmark-outline zmdi-hc-fw"></i>&nbsp;&nbsp; Catálogo</a></li>
                      <li><a href="{{ route('libros.crear') }}"><i class="zmdi zmdi-book zmdi-hc-fw"></i>&nbsp;&nbsp; Nuevo libro</a></li>
                  </ul>
                </li>

                <li>
                  <div class="dropdown-menu-button"><i class="zmdi zmdi-alarm zmdi-hc-fw"></i>&nbsp;&nbsp; Préstamos y reservaciones <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw icon-sub-menu"></i></div>
                  <ul class="list-unstyled">
                      <li><a href="{{ route('prestamos.crear') }}"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i>&nbsp;&nbsp; Crear préstamos</a></li>

                      <li><a href="{{ route('prestamos') }}"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i>&nbsp;&nbsp; Todos los préstamos</a></li>
                    
                  </ul>
                </li>
            </ul>
        </div>
        <div class="nav-lateral-divider full-reset"></div>

        @include('plantilla.footer')
    </div>
  </div>
