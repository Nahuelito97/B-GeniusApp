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
             <li class="breadcrumb-item active">Categorías</li>
             <li class="breadcrumb-item"><a href="{{ route('categorias.crear') }}">Crear.</a></li>
           </ol>
         </div>
       </div>
       <div class="col-xs-12 col-sm-4 col-md-3">
           <img src="{{asset(
             'front-end/assets/img/category.png')}}" alt="user" class="img-responsive center-box" style="max-width: 110px;">
       </div>
       <br>
       <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
           <h4>Bienvenido a la sección donde se encuentra el listado de las categorías.</h4>
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
               <h3 class="card-title">Listado de Categorías.</h3>
             </div>
             <!-- /.card-header -->
             <div class="card-body">

               <table id="clientes" class="table table-hover">
                 <thead>
                    <tr>
                        <th class="min-tablet">Nombre</th>
                        <th class="min-tablet">Descripción</th>
                    </tr>

                 </thead>
                 <tbody>
                   @foreach($categorias as $categoria)
                     <tr>

                       <td>
                           {{$categoria->nombre}}
                       </td>
                       <td>
                        {{$categoria->description}}
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
