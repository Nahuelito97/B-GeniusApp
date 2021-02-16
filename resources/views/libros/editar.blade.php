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
              <li class="breadcrumb-item active">Información Libros</li>
            </ol>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3">
            <img src="{{asset(
              'front-end/assets/img/checklist.png')}}" alt="pdf" class="img-responsive center-box" style="max-width: 110px;">
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
            Bienvenido a esta sección, aqui puede ver la información referente a un libro en el sigueinte formulario.
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
                <h3 class="card-title">Información del libro seleccionado.</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <form class=""
                method="post"
                action="{{ route('libros.actualizar', $libro) }}"
                >

                {{ csrf_field() }}
                {{ method_field('put') }}

                  <div class="row">


                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="categoria_id" class="label text-center">Categoria...</label>
                        <input id="categoria_id" type="text"
                        class="form-control @error('categoria_id') is-invalid @enderror text-center"
                        name="categoria_id"
                        value="{{ $libro->categoria->nombre }}" autocomplete="categoria_id"
                        disabled="disabled"
                        autofocus>
                          @error('categoria_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="estado_id" class="label text-center">Estado...</label>
                        <input id="estado_id" type="text" class="form-control @error('estado_id') is-invalid @enderror text-center"
                        name="estado_id"
                        value="{{ $libro->estado->descripcion }}" autocomplete="titulo"
                        disabled="disabled"
                        autofocus>
                          @error('estado_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="titulo" class="label text-center">Titulo....</label>
                        <input id="titulo" type="text" class="form-control @error('titulo') is-invalid @enderror text-center"
                        name="titulo"
                        value="{{ old('titulo',  $libro->titulo) }}" autocomplete="titulo"
                        disabled="disabled"
                        autofocus>
                          @error('titulo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="autor" class="label text-center">Autor...</label>
                        <input id="autor" type="text" class="form-control @error('autor') is-invalid @enderror text-center"
                        name="autor" value="{{ old('autor',  $libro->autor) }}"
                        autocomplete="autor" autofocus disabled="disabled">
                            @error('autor')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</trong>
                              </span>
                            @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="cod_libro" class="label text-center">Código Libro...</label>
                        <input id="cod_libro" type="text" class="form-control @error('cod_libro') is-invalid @enderror text-center"
                        name="cod_libro" value="{{ old('cod_libro',  $libro->cod_libro) }}" autocomplete="cod_libro" autofocus disabled="disabled">
                            @error('cod_libro')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="pais" class="label text-center">Pais...</label>
                        <input id="pais" type="text" class="form-control @error('pais') is-invalid @enderror text-center"
                        name="pais" value="{{ old('pais',  $libro->pais) }}" autocomplete="pais" autofocus disabled="disabled">
                            @error('pais')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="año" class="label text-center">Año...</label>
                        <input id="año" type="date" class="form-control @error('año') is-invalid @enderror text-center"
                        name="año" value="{{ old('año',  $libro->año) }}" autocomplete="año" autofocus disabled="disabled">
                          @error('año')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                    </span>
                          @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="editorial" class="label text-center">Editorial...</label>
                        <input id="editorial" type="text" class="form-control @error('editorial') is-invalid @enderror text-center"
                        name="editorial" value="{{ old('editorial',  $libro->editorial) }}" autocomplete="editorial" autofocus disabled="disabled">
                            @error('editorial')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="edicion" class="label text-center">Edición...</label>
                        <input id="edicion" type="text" class="form-control @error('edicion') is-invalid @enderror text-center"
                        name="edicion" value="{{ old('edicion',  $libro->edicion) }}" autocomplete="edicion" autofocus disabled="disabled">
                            @error('edicion')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="cantidad" class="label text-center">Cantidad...</label>
                        <input id="cantidad" type="text" class="form-control @error('cantidad') is-invalid @enderror text-center"
                        name="cantidad" value="{{ old('cantidad',  $libro->cantidad) }}" autocomplete="cantidad" autofocus disabled="disabled">
                            @error('cantidad')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                      </div>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <a class="btn btn-primary btn-rounded" href="{{ route('libros') }}">Volver</a>

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
