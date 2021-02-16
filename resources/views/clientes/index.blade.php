@extends('layouts.app')


@section('content')


<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0 text-dark">Sistema bibliotecario</h1>
           <h1 class="all-tittles text-dark"> <small></small></h1>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item active">Clientes</li>
             <li class="breadcrumb-item"><a href="{{ route('clientes.crear') }}">Crear.</a></li>
           </ol>
         </div><!-- /.col -->
       </div>
       <div class="col-xs-12 col-sm-4 col-md-3">
           <img src="{{asset(
             'front-end/assets/img/user03.png')}}" alt="user" class="img-responsive center-box" style="max-width: 110px;">
       </div>
       <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
         Bienvenido a la sección donde se encuentra el listado de clientes de la
         biblioteca, podrás buscar los clientes por nombre.
         Puedes actualizar o eliminar los datos del cliente.<br>
       </div>
     </div><!-- /.container-fluid -->
   </section>

   <!-- Main content -->
   <section class="content">
     <div class="container-fluid">
       <div class="row">

         <div class="col-md-12">
           <!-- general form elements disabled -->
           <div class="card card-warning">
             <div class="card-header">
               <h3 class="card-title">Listado de Clientes.</h3>
             </div>
             <!-- /.card-header -->
             <div class="card-body">

               <table id="clientes" class="table table-hover">
                 <thead>
                     <tr>
                         <th>#</th>
                         <th>Nombre</th>
                         <th>Apellido</th>
                         <th class="min-tablet">Dirección</th>
                         <th class="min-tablet">Correo Electronico</th>

                         <th class="min-desktop">Editar</th>
                         <th class="min-desktop">Eliminar</th>
                     </tr>
                 </thead>
                 <tbody>
                   @foreach($clientes as $cliente)
                       <tr>
                         <td>
                              {{$cliente->id}}
                         </td>
                           <td>
                                {{$cliente->nombre}}
                           </td>
                           <td>
                                {{$cliente->apellido}}
                           </td>
                           <td>
                                {{$cliente->direccion}}
                           </td>
                           <td>
                               {{$cliente->correoelectronico}}
                           </td>

                           <td>
                             <a class="btn btn-success"
                              href="{{route('clientes.editar', $cliente)}}">
                              <i class="fas fa-edit"></i>
                            </a>
                            </td>
                            <td>
                             <form method="post" action="{{route('clientes.borrar', $cliente)}}">
                               {{ csrf_field ()}}
                               {{ method_field('put')}}
                               <button class="btn btn-danger btn-icon" onclick="return confirm('¿Seguro que desea eliminar al cliente?')" title="Eliminar Cliente"><i class="fas fa-trash"></i></button>
                             </form>
                           </td>

                       </tr>
                   @endforeach
                 </tbody>
               </table>
             </div>
             <!-- /.card-body -->
           </div>

         </div>
         <!--/.col (right) -->
       </div>
       <!-- /.row -->
     </div><!-- /.container-fluid -->
   </section>
   <!-- /.content -->
 </div>



@endsection
