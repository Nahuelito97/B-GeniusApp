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
              <li class="breadcrumb-item active">Registrar Libros</li>
            </ol>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3">
            <img src="{{asset(
              'front-end/assets/img/checklist.png')}}" alt="pdf" class="img-responsive center-box" style="max-width: 110px;">
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
            Bienvenido a esta sección, aqui pordra cargar un nuevo libro al sistema,
            para poder realizar la carga de un libro deberas de completar el sigueinte formulario.
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
                form
                method="POST"
                action="{{ route('libros.guardar') }}"

                >
                @csrf
                <div class="col-lg-12">
                    <div class="from-group has-feedback">
                      <label for="categoria_id" class="control-label text-semibold">Seleccione una Categoría</label>
                      <select id="categoria_id" class="form-control
                      @error('categoria_id') is-invalid @enderror"
                      name="categoria_id"
                      data-toggle="tooltip" data-placement="top"
                      title="Elige la categoría del libro">
                        <option value="#" selected disabled>Categorias...</option>
                        @foreach ($categorias as $c)
                          @if ( old('categoria_id') == $c->id )
                            <option value="{{ $c->id }}" selected>{{ $c->nombre }}</option>
                          @else
                            <option value="{{ $c->id }}">{{ $c->nombre }}</option>
                          @endif
                        @endforeach
                      </select>
                      @error('categoria_id')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{$message}}</strong>
                        </span>
                      @enderror
                    </div>
                </div>



                <div class="col-lg-12">
                    <div class="from-group has-feedback">
                      <label for="estado_id" class="control-label text-semibold">Seleccione un Estado</label>
                        <select id="estado_id" class="form-control
                        @error('estado_id') is-invalid @enderror"
                        name="estado_id"
                        data-toggle="tooltip" data-placement="top"
                        title="Elige la categoría del libro">
                           <option value="#" selected disabled>Estados...</option>
                            @foreach ($estados as $e)
                             @if ( old('estado_id') == $e->id )
                               <option value="{{ $e->id }}" selected>{{ $e->descripcion }}</option>
                             @else
                               <option value="{{ $e->id }}">{{ $e->descripcion }}</option>
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



                <div class="col-lg-12">
                    <div class="from-group has-feedback">
                      <label for="titulo"  class="control-label text-semibold">Título</label>
                        <input id="titulo" type="text" class="form-control
                        @error('titulo') is-invalid @enderror"
                        name="titulo"
                        value="{{ old('titulo') }}" autocomplete="titulo" autofocus
                        placeholder="Escribe aquí el título o nombre del libro" >
                        @error('titulo')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                </div>



                <div class="col-lg-12">
                    <div class="from-group has-feedback">
                      <label for="autor" class="control-label text-semibold">Autor</label>
                        <input id="autor" type="text" class="form-control
                        @error('autor') is-invalid @enderror"
                        name="autor" value="{{ old('autor') }}" autocomplete="autor"
                        autofocus"" placeholder="Escribe aquí el autor del libro">
                        @error('autor')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                         @enderror

                    </div>
                </div>



                <div class="col-lg-12">
                    <div class="form-group has-feedback">
                        <label for="cod_libro" class="control-label text-semibold">Código correlativo</label>
                        <input id="cod_libro" type="integer"
                        class="form-control @error('cod_libro') is-invalid @enderror"
                        name="cod_libro" value="{{ old('cod_libro') }}"
                        autocomplete="cod_libro" autofocus
                        placeholder="Escribe aquí el código correlativo del libro"
                        pattern="[0-9]{1,9}"  maxlength="9"
                        >
                        @error('cod_libro')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                         @enderror

                    </div>
                </div>



                <div class="col-lg-12">
                    <div class="from-group has-feedback">
                      <label for="pais" class="control-label text-semibold">País.</label>
                      <input id="pais" type="text"
                      class="form-control
                      @error('pais') is-invalid @enderror"
                      name="pais" value="{{ old('pais') }}" autocomplete="año" autofocus""
                      placeholder="Escribe aquí el pais del libro">
                        @error('pais_id')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{$message}}</strong>
                           </span>
                         @enderror
                    </div>
                </div>
               <div class="col-lg-12">
                    <div class="form-group has-feedback">
                      <label for="año" class="control-label text-semibold">Año</label>
                       <input id="año" type="date"
                       class="form-control
                       @error('año') is-invalid @enderror"
                       name="año" value="{{ old('año') }}" autocomplete="año" autofocus""
                       placeholder="Escribe aquí el año del libro">
                       @error('año')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                                  </span>
                        @enderror

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group has-feedback">

                        <label for="editorial" class="control-label text-semibold">Editorial</label>
                        <input id="editorial" type="text"
                        class="form-control
                        @error('editorial') is-invalid @enderror"
                        name="editorial" value="{{ old('editorial') }}" autocomplete="editorial" autofocus""
                        placeholder="Escribe aquí la editorial del libro"
                        >
                        @error('editorial')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                         @enderror

                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group has-feedback">
                        <label for="edicion" class="control-label text-semibold">Edición</label>
                        <input id="edicion" type="text"
                        class="form-control @error('edicion') is-invalid @enderror"
                        name="edicion" value="{{ old('edicion') }}" autocomplete="edicion" autofocus""
                        placeholder="Escribe aquí la edición del libro">
                        @error('edicion')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                         @enderror


                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group has-feedback">
                      <label for="cantidad" class="control-label text-semibold">Cantidad</label>
                        <input id="cantidad" type="integer"
                        class="form-control @error('cantidad') is-invalid @enderror"
                        name="cantidad" value="{{ old('cantidad') }}" autocomplete="cantidad"
                        autofocus""
                        placeholder="Escribe aquí la cantidad del libro"
                        >
                        @error('cantidad')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror

                    </div>
                </div>

                <div class="col-xs-12">
                    <p class="text-center">
                        <button type="reset" class="btn btn-info btn-rounded" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                        <button type="submit" class="btn btn-primary btn-rounded"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Registrar Libros</button>
                        <a class="btn btn-primary btn-rounded" href="{{ route('libros') }}">Volver</a>
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
