<!--NAVBAR-->
<!--===================================================-->
<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-gray-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('home') }}" class="nav-link">Inicio</a>
      </li>


      <!-- SEARCH FORM -->
        <form class="form-inline ml-3"  method="get" action="#">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search"
            placeholder="¿Qué estas buscando?" aria-label="Search" name="query" id="search">
            <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
            </button>
            </div>
        </div>
        </form>

    </ul>


    <ul class="navbar-nav ml-auto">

      <!-- Salir del Sistema -->

      <li class="nav-item dropdown">
        @guest

        @else
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Salir</a>

        </li>
        <li>
          <a class="nav-link" data-href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i></a>
           <form id="logout-form" action="{{ route('logout') }}" method="POST">
             @csrf
           </form>
        </li>

        @endguest

      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
<!--===================================================-->
<!--END NAVBAR-->
