@extends('layouts.app')

@section('body-class','landing-page')

@section('content')

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1 class="m-0 text-dark">Sistema bibliotecario</h1>
           <br>
           <h1 class="all-tittles text-dark"> <small></small></h1>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item active">Préstamos</li>
             <li class="breadcrumb-item"><a href="{{ route('prestamos.crear') }}">Crear.</a></li>
           </ol>
         </div><!-- /.col -->
       </div>

       <div class="col-xs-6 col-sm-4 col-md-3">
           <img src="{{asset(
             'front-end/assets/img/calendar_book.png')}}" alt="calendar" class="img-responsive center-box" style="max-width: 110px;">
       </div>
       <br>
       <div class="col-xs-8 col-sm-8 col-md-6 text-justify lead">
          <h4>
            Bienvenido a esta sección, aquí se muestran todos los préstamos de libros realizados hasta la fecha y que ya se entregaron satisfactoriamente.
          </h4>
           <br>
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
               <h4 class="card-title">Listado de Préstamos.</h4>
             </div>
             <!-- /.card-header -->
             <div class="card-body">

               <table id="clientes" class="table table-hover">
                 <thead>
                     <th>#</th>
                     <th>Nombre de Libro</th>
                     <th>Nombre del Cliente</th>
                     <th class="min-tablet">Fecha Solicitud</th>
                     <th class="min-tablet">Fecha Entrega</th>
                     <th class="min-desktop">Estado</th>
                     <th class="min-desktop">Cambiar Estado</th>
                 </thead>
                 <tbody>
                   @foreach($prestamos as $prestamo)
                       <tr>
                           <td>
                             {{ $prestamo->id}}
                           </td>

                           <td>
                               {{ $prestamo->cliente->nombre}}
                           </td>
                           <td>
                               {{ $prestamo->libro->titulo}}
                           </td>
                           <td>
                               {{$prestamo->fecha_entrega}}
                           </td>
                           <td>
                               {{$prestamo->fecha_devolucion}}
                           </td>
                           <td>
                               @switch($prestamo->condicion)
                                   @case(0)
                                       <span class="badge badge-warning">En Espera</span>
                                   @break
                                   @case(1)
                                       <span class="badge badge-success">Devuelto</span>
                                   @break
                                   @case(2)
                                       <span class="badge badge-danger">No Devuelto</span>
                                   @break
                               @endswitch
                           </td>
                           <td class="text-right">
                             <form class="d-inline"
                                 method="POST"
                                 action="{{ route('prestamos.actualizar', $prestamo) }}"
                                 >
                                 {{ csrf_field() }}
                                 {{ method_field('PUT') }}
                                 <button type="submit" class="btn btn-outline-success" onclick="return confirm('¿Seguro que desea cambiar el estado del prestamo?')" title="Cambiar estado">
                                     Cambiar Estado
                                 </button>
                             </form>
                           </td>
                       </tr>
                   @endforeach
                 </tbody>
               </table>
             </div>
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
