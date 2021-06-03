<!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="#" class="brand-link">
     <img src="{{asset(
         'plantilla/img\logo.png')}}" alt="Nifty Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
     <span class="brand-text font-weight-light">B-Genius - Admin</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ Auth::user()->image }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('user.profile') }}" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
         <li class="nav-item has-treeview">
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
            </li>
            <li class="nav-item mt-auto">
                <a href="{{ route('categorias') }}" class="nav-link">
                  <i class="nav-icon fas fa-bookmark"></i>
                  <p>Categorías.</p>
                </a>
              </li>
              <li class="nav-item mt-auto">
                <a href="{{ route('clientes') }}" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>Clientes.</p>
                </a>
              </li>
              <li class="nav-item mt-auto">
                <a href="{{ route('libros') }}" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>Libros.</p>
                </a>
              </li>
              <li class="nav-item mt-auto">
                <a href="{{ route('prestamos') }}" class="nav-link">
                  <div class="icon">
                    <i class="nav-icon fas fa-tag"></i>
                    <p>
                        Préstamos.
                    </p>
                  </div>

                </a>
              </li>
              <hr>
              <li class="nav-item mt-auto">
                <a href="{{ route('user.index') }}" class="nav-link {{ (request()->is('admin/user*')) ? 'active': '' }}">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    User
                </p>
                </a>
              </li>
              <li class="nav-item mt-auto">
                <a href="{{ route('setting.index') }}" class="nav-link {{ (request()->is('admin/setting')) ? 'active': '' }}">
                    <i class="nav-icon fas fa-cog"></i>
                    <p>
                        Setting
                    </p>
                </a>
              </li>

         </li>


       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>
