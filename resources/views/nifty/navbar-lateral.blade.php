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
         <img src="{{asset(
             'adminlt/dist/img/nahu.jpeg')}}" class="img-circle elevation-2" alt="User Image">
       </div>
       <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        <a href="#" class="d-block">{{ Auth::user()->email }}</a>
       </div>
     </div>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
         <li class="nav-item has-treeview">
           <a href="#" class="nav-link">
             <i class="fas fa-caret-down"></i>
             <p>
               Menu
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="{{ route('categorias') }}" class="nav-link">
                 <i class="fas fa-bookmark"></i>
                 <p>Categorías.</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('clientes') }}" class="nav-link">
                 <i class="fas fa-user"></i>
                 <p>Clientes.</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('libros') }}" class="nav-link">
                 <i class="fas fa-book"></i>
                 <p>Libros.</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="{{ route('prestamos') }}" class="nav-link">
                 <div class="icon">
                   <i class="ion ion-pie-graph"> Préstamos.</i>
                 </div>

               </a>
             </li>
           </ul>
         </li>

       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>
