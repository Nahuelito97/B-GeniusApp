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
             <li class="breadcrumb-item active">Libros.</li>
             <li class="breadcrumb-item"><a href="{{ route('libros.crear') }}">Crear.</a></li>
           </ol>
         </div><!-- /.col -->
       </div>
       <div class="col-xs-12 col-sm-4 col-md-3">
           <img src="{{asset(
             'front-end/assets/img/checklist.png')}}" alt="pdf" class="img-responsive center-box" style="max-width: 110px;">
             <br>
       </div>
       <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
        <h4>Bienvenido al catálogo, selecciona una categoría y un estado de la lista para empezar a filtar los libros,
            si deseas buscar un libro por título has click en el icono de busqueda.
        </h4>
        <br>
       </div>
     </div><!-- /.container-fluid -->
   </section>

   <!-- Main content -->
   <section class="content">
     <div class="container-fluid">
       <nav class="navbar">
         <form>
            <div class="form-row align-items-center">
              <div class="col-md-4 my-1">
                <label class="mr-sm-2 sr-only" for="categoria_id"></label>
                <select class="custom-select mr-sm-2 @error('categoria_id') is-invalid @enderror" id="categoria_id"  name="categoria_id">
                  <option value="#" selected disabled>Categorias...</option>
                  @foreach($categorias as $cat)
                    @if(!is_null($categoria))
                      @if (old('categoria_id',$categoria->id) == $cat->id)
                        <option value="{{$cat->id}}" selected> {{$cat->nombre}} </option>
                      @else
                        <option value="{{$cat->id}}"> {{$cat->nombre}} </option>
                      @endif
                    @else
                      @if (old('categoria_id') == $cat->id)
                        <option value="{{$cat->id}}" selected> {{$cat->nombre}} </option>
                      @else
                        <option value="{{$cat->id}}"> {{$cat->nombre}} </option>
                      @endif
                    @endif
                  @endforeach
                </select>
                @error('estado_id')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                  </span>
                @enderror
              </div>
              <div class="col-md-4 my-1">
                <label class="mr-sm-2 sr-only" for="estado_id"></label>
                <select class="custom-select mr-sm-2 @error('estado_id') is-invalid @enderror" id="estado_id" name="estado_id">
                  <option value="#" selected disabled>Todos.</option>
                  @foreach($estados as $est)
                    @if(!is_null($estado))
                      @if (old('estado_id',$estado->id) == $est->id)
                        <option value="{{$est->id}}" selected> {{$est->descripcion}} </option>
                      @else
                        <option value="{{$est->id}}"> {{$est->descripcion}} </option>
                      @endif
                    @else
                      @if (old('estado_id') == $est->id)
                        <option value="{{$est->id}}" selected> {{$est->descripcion}} </option>
                      @else
                        <option value="{{$est->id}}"> {{$est->descripcion}} </option>
                      @endif
                    @endif
                  @endforeach
                </select>
                @error('estado_id')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                  </span>
                @enderror
              </div>
            </div>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Filtrar</button>
          </form>
         <form class="form-inline">
          <input name="buscarpor" type="search" class="form-control mr-sm-1"
          placeholder="Buscar libro por Titulo" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
         </form>
       </nav>
        <!-- Direct Chat -->
        <br>
        <h4 class="mt-4 mb-2">Listado de Libros</h4>
       <br>

        <div class="features">
          <div class="row">
            @foreach($libros as $libro)
             <div class="col-md-5">

               <!-- Widget: user widget style 1 -->
               <div class="card card-widget widget-user">
                 <!-- Add the bg color to the header using any of the bg-* classes -->
                 <div class="widget-user-header text-white"
                      style="background: url('https://cdn.pixabay.com/photo/2016/01/09/18/27/old-1130739_960_720.jpg') center center;">
                   <h3 class="widget-user-username text-right">{{$libro->titulo}}</h3>
                   <h5 class="widget-user-desc text-right">{{$libro->autor}}</h5>
                 </div>

                 <div class="card-footer">
                   <div class="row">
                     <div class="col-sm-3 border-right">
                       <div class="description-block">
                         <span class="description-text">Código</span>
                         <h5 class="description-header">{{$libro->cod_libro}}</h5>
                       </div>
                       <!-- /.description-block -->
                     </div>
                     <!-- /.col -->
                     <div class="col-sm-3 border-right">
                       <div class="description-block">
                         <span class="description-text">Cantidad</span>
                         <h5 class="description-header">{{$libro->cantidad}}</h5>
                       </div>
                       <!-- /.description-block -->
                     </div>
                     <div class="col-sm-3 border-right">
                        <div class="description-block">
                          <span class="description-text">Precio</span>
                          <h5 class="description-header">{{$libro->price}}</h5>
                        </div>
                        <!-- /.description-block -->
                      </div>
                     <!-- /.col -->
                     <div class="col-sm-3">
                       <div class="description-block">
                         <a  class="btn btn-success" href="{{route('libros.editar', $libro)}}">
                           <i class="fas fa-edit"></i>
                         </a>
                         <form method="post" action="{{route('libros.borrar', $libro)}}">
                           {{ csrf_field ()}}
                           {{ method_field('put')}}
                           <button type="submit" class="btn btn-danger btn-round" onclick="return confirm('¿Seguro que desea Eliminar este libro?')" title="Eliminar Libro">
                               <i class="fa fa-trash" aria-hidden="true"></i>
                           </button>
                         </form>
                       </div>
                       <!-- /.description-block -->
                     </div>
                     <!-- /.col -->
                   </div>
                   <!-- /.row -->
                 </div>
               </div>
               <!-- /.widget-user -->
             </div>
             <!-- /.col -->
            @endforeach
          </div>
          {{ $libros->links() }}
       </div>

       <!-- /.row -->

     </div><!-- /.container-fluid -->
   </section>
   <!-- /.content -->
 </div>




@endsection
