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
              <li class="breadcrumb-item active">Registrar Clientes</li>
            </ol>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3">
            <img src="{{asset(
              'front-end/assets/img/user03.png')}}" alt="user" class="img-responsive center-box" style="max-width: 110px;">
        </div>
        <br>
        <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
            <h4>
                Bienvenido a la sección para registrar nuevos clientes, para poder registrar un cliente deberás de llenar todos los campos del siguiente formulario.
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
                <form
                method="POST"
                action="{{ route('clientes.guardar') }}"
                >
                @csrf
                  <div class="col-lg-12">
                      <div class="form-group has-feedback">
                          <label for="nombre" class="control-label text-semibold">Nombre.</label>
                          <input id="nombre"type="text" class="form-control @error('nombre') is-invalid @enderror"
                          placeholder="Escribe aquí el nombre del cliente."

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
                  <div class="col-lg-12">
                      <div class="form-group has-feedback">
                          <label for="apellido" class="control-label text-semibold" >Apellido.</label>
                          <input id="apellido" type="text" class="form-control
                          @error('apellido') is-invalid @enderror"
                          placeholder="Escribe aquí los apellido del cliente."

                          name="apellido"
                          value="{{ old('apellido') }}"
                          autocomplete="apellido"
                          autofocus>

                          @error('apellido')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror


                      </div>
                  </div>
                  <div class="col-lg-12">
                      <div class="form-group has-feedback">
                          <label for="direccion" class="control-label text-semibold" >Dirección.</label>
                          <input id="direccion" type="text" class="form-control
                          @error('direccion') is-invalid @enderror"
                          placeholder="Escribe aqui la dirección del cliente"

                          title="Dirección del cliente"
                          name="direccion"
                          value="{{ old('direccion') }}"
                          autocomplete="direccion"
                          autofocus>
                          @error('direccion')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                  <div class="col-lg-12">
                      <div class="form-group has-feedback">
                          <label for="fechanacimiento" class="control-label text-semibold">Fecha Nacimiento.</label>
                          <input id="fechanacimiento" type="date" class="form-control
                          @error('fechanacimiento') is-invalid @enderror"


                          name="fechanacimiento"
                          value="{{ old('fechanacimiento') }}"
                          autocomplete="fechanacimiento"
                          autofocus
                          >

                          @error('fechanacimiento')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror


                      </div>
                  </div>
                  <div class="col-lg-12">
                      <div class="form-group has-feedback">
                          <label for="telefono" class="control-label text-semibold">Teléfono.</label>
                          <input id="telefono" type="integer" class="form-control
                          @error('telefono') is-invalid @enderror"
                          placeholder="Escribe aquí el numero de teléfono del cliente"

                          name="telefono"
                          value="{{ old('telefono') }}"
                          autocomplete="telefono"
                          autofocus>

                          @error('telefono')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror



                      </div>
                  </div>



                  <div class="col-lg-12">
                    <div class="form-group bmd-form-group is-filled">
                        <label for="correoelectronico">Correo Electronico.</label>
                        <input id="correoelectronico" type="mail"
                        class="form-control @error('correoelectronico') is-invalid @enderror"
                        name="correoelectronico"
                        value="{{ old('correoelectronico') }}"
                        autocomplete="correoelectronico"
                        autofocus
                        placeholder="Escribe aquí el correo electronico del cliente.">

                        @error('correoelectronico')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                  </div>

                  </div>
                  <hr>
                  <div class="col-xs-12">
                      <p class="text-center">
                          <button type="reset" class="btn btn-info btn-rounded" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                          <button type="submit" class="btn btn-primary btn-rounded"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Registrar Cliente</button>
                          <a class="btn btn-primary btn-rounded" href="{{ route('clientes') }}">Volver</a>
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
