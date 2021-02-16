@extends('layouts.app')

@section('body-class','landing-page')

@section('content')


<div class="boxed">

  <!--CONTENT CONTAINER-->
  <!--===================================================-->
  <div id="content-container">
            <div class="container">
              <div class="page-header">
                <h1 class="all-tittles">Sistema bibliotecario <small>Estados</small></h1>
              </div>
              <hr>
              <div class="col-xs-12 col-sm-4 col-md-3">
                   <img src="{{asset(
                     'front-end/assets/img/section.png')}}" alt="user" class="img-responsive center-box" style="max-width: 110px;">
              </div>
              <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                  Bienvenido a la sección para registrar nuevos estados de los ejemplares,
                  debes de llenar el siguiente formulario para registrar mas estados.
              </div>
            </div>

            <hr>
            <!--Page content-->
            <!--===================================================-->
              <div id="page-content">
                <div class="panel">
                      <div class="panel-heading">
                        <legend class="panel-title">Complete el siguiente formulario.</legend>
                      </div>
                    
                      <div class="panel-body">

                        <form class="contact-form"
                            method="POST"
                            action="{{ route('estados.guardar') }}"
                            >
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="descripcion" class="bmd-label-floating">Descripción<span class="text-danger">*</span></label>
                                      <input id="descripcion" type="text" class="form-control @error('descripcion') is-invalid @enderror"
                                      name="descripcion"
                                      value="{{ old('descripcion') }}"
                                      autocomplete="descripcion"
                                      autofocus
                                    >
                                      @error('descripcion')
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
                </div>
              </div>
            <!--===================================================-->
            <!--End page content-->

    </div>
    <!--===================================================-->
    <!--END CONTENT CONTAINER-->

    <!--JAVASCRIPT-->
    <!--=================================================-->


</div>

@endsection
