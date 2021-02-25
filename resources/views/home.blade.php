@extends('layouts.app')

@section('body-class','home-page')

@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Sistema bibliotecario</h1>
          <h1 class="all-tittles text-dark"> <small></small></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Inicio</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
      <div class="col-xs-12 col-sm-4 col-md-3">
          <img src="{{asset(
            'front-end/assets/img/flat-book.png')}}" alt="pdf" class="img-responsive center-box" style="max-width: 110px;">
      </div>
      <div class="col-xs-8 col-sm-6 col-md-6 text-justify lead">
        <h1 class="all-tittles">Las Bibliotecas son puertas a otras vidas.</h1>
        <h4>De todos los instrumentos del hombre, el más asombroso es, sin duda, el Libro.</h4>
      </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="container">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Secciones</h1>
      </div>



      <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$categoria}}</h3>

                <p>Categorías Registradas</p>
              </div>
              <div class="icon">
              <i class="fas fa-bookmark"></i>
              </div>
              <a  class="small-box-footer" href="{{ route('categorias') }}">Mas información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$cliente}}</h3>

                <p>Clientes Registrados</p>
              </div>
              <div class="icon">
                <i class="fas fa-user"></i>
              </div>
              <a class="small-box-footer" href="{{ route('clientes') }}">Mas información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>{{$pres}}</h3>

              <p>Prestamos Totales</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{ route('prestamos') }}" class="small-box-footer">Mas información <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{$cantidad}}</h3>

              <p> Total de Libros</p>
            </div>
            <div class="icon">
              <i class="fas fa-book"></i>
            </div>
            <a href="{{ route('libros') }}" class="small-box-footer">Mas información <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

    </div><!-- /.container-fluid -->
  </section>

  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@endsection
