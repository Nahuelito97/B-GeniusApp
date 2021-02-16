@extends('layouts.app')

@section('body-class','landing-page')

@section('content')

<div class="boxed">


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
                  Bienvenido a la sección donde se encuentra el listado
                  de los estados en el cual se encuantran los ejemplares.

              </div>
            </div>

            <hr>
            <!--Page content-->
            <!--===================================================-->
              <div id="page-content">

                <!-- Basic Data Tables -->
        					<!--===================================================-->
        					<div class="panel">
        					    <div class="panel-heading">
                        <legend class="panel-title">Listado de estados acutuales de los ejemplares.</legend>
        					    </div>
        					    <div class="panel-body">
        					        <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
        					            <thead>
        					                <tr>
                                      <th>#</th>
        					                    <th>Nombre</th>

        					                </tr>
        					            </thead>
                              <tbody>
                                  @foreach($estados as $estado)
                                      <tr>
                                          <td>
                                              {{$estado->id}}
                                          </td>
                                          <td>
                                              {{$estado->descripcion}}
                                          </td>
                                      </tr>
                                  @endforeach
                              </tbody>
        					        </table>
        					    </div>
        					</div>
        					<!--===================================================-->
        					<!-- End Striped Table -->

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
