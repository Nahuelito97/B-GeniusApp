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
              <li class="breadcrumb-item active">Registrar Préstamos</li>
            </ol>
          </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-3">
            <img src="{{asset(
              'front-end/assets/img/calendar_book.png')}}" alt="calendar" class="img-responsive center-box" style="max-width: 110px;">
        </div>
        <br>
         <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
             <h4>
                Bienvenido a la sección para registrar nuevos préstamos,
                para poder registrar un nuevo préstamo usted debe de seleccionar
                un cliente, un libro y una fecha en el siguiente
                formulario.
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
                <form class="contac-form"
                      method="POST"
                      action="{{ route('prestamos.guardar') }}"
                      >
                      @csrf
                      <div class="row">
                          <div class="col-lg-12">
                            <div class="form-group has-feedback">
                              <label for="cliente_id" class="control-label text-semibold">Cliente...</label>
                              <select id="cliente_id" class="select2 form-control  @error('cliente_id') is-invalid @enderror"
                              name="cliente_id">
                                  <option value="#" selected disabled>Todos...</option>

                                  @foreach ($clientes as $cli)
                                  @if ( old('cliente_id') == $cli->id )
                                          <option value="{{ $cli->id }}" selected>{{ $cli->nombre }}</option>
                                  @else
                                          <option value="{{ $cli->id }}">{{ $cli->nombre }}</option>
                                  @endif
                                  @endforeach
                              </select>

                              @error('cliente_id')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{$message}}</strong>
                              </span>
                              @enderror
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-group has-feedback">
                                <label for="libro_id" class="control-label text-semibold">Libro</label>
                                <select id="libro_id" class="select2 form-control @error('libro_id') is-invalid @enderror" name="libro_id">
                                  <option value="#" selected disabled>Todos...</option>

                                    @foreach ($libros as $li)
                                    @if ( old('libro_id') == $li->id )
                                            <option value="{{ $li->id }}" selected>{{ $li->titulo }}</option>
                                    @else
                                            <option value="{{ $li->id }}">{{ $li->titulo }}</option>
                                    @endif
                                    @endforeach
                                </select>

                                @error('libro_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-group has-feedback">
                                <label for="fecha_prestamo" class="control-label text-semibold">Fecha Préstamo</label>
                                <input id="fecha_prestamo" type="date" class="form-control @error('fecha_prestamo') is-invalid @enderror"
                                name="fecha_prestamo"
                                value="{{ old('fecha_prestamo') }}"
                                autocomplete="fecha_prestamo"
                                autofocus
                                >
                                @error('fecha_prestamo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-12">
                            <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
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
