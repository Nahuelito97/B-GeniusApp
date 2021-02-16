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
           <h1 class="all-tittles text-dark"> <small></small></h1>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item active">Registrar Categorías</li>
           </ol>
         </div>
       </div>
       <div class="col-xs-12 col-sm-4 col-md-3">
            <img src="{{asset(
              'front-end/assets/img/category.png')}}" alt="user" class="img-responsive center-box" style="max-width: 110px;">
       </div>
       <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
           Bienvenido a la sección para registrar nuevas categorías de libros,
           debes de llenar el siguiente formulario para registrar una categoría.
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
               <h3 class="card-title">Complete el siguiente formulario.</h3>
             </div>
             <!-- /.card-header -->
             <div class="card-body">
               @if (count($errors) > 0)
                 <div class="alert alert-danger">
                   <button class="close" data-dismiss="alert"><i class="pci-cross pci-circle"></i></button>
                   <ul>
                     @foreach($errors->all() as $error)
                       <li>{{ $error }}</li>
                     @endforeach
                   </ul>
                 </div>
               @endif

               <form
                   method="POST"
                   action="{{ route('categorias.guardar') }}"

                   >
                   @csrf
                   <div class="col-lg-12">

                    <div class="form-group has-feedback">
                      <label for="nombre" class="control-label text-semibold">Nombre</label>
                      <input id="nombre"type="text" class="form-control @error('nombre') is-invalid @enderror"
                      placeholder="Escribe aquí la descripción de la categoría"
                      title="Descripción"
                      name="nombre"
                      value="{{ old('nombre') }}"
                      autocomplete="nombre"
                      autofocus>
                      @error('nombre')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

                  </div>
                 </div>
                 <div class="col-xs-12">
                      <p class="text-center">
                          <button type="reset" class="btn btn-info btn-rounded" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                          <button type="submit" class="btn btn-primary btn-rounded"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Registrar Categoría</button>
                          <a class="btn btn-primary btn-rounded" href="{{ route('categorias') }}">Volver</a>

                      </p>
                 </div>
              </form>
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
