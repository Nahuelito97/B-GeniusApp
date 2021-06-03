
<!DOCTYPE html>
<html lang="es">
<head>
    <title>B-Genius</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="{{asset(
      'front-end/assets/img/brand.png')}}" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="{{asset(
      'front-end/css/sweet-alert.css')}}">
    <link rel="stylesheet" href="{{asset(
      'front-end/css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset(
      'front-end/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset(
      'front-end/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset(
      'front-end/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" href="{{asset(
      'front-end/css/style.css')}}">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="{{asset(
      'front-end/js/modernizr.js')}}"></script>
    <script src="{{asset(
      'front-end/js/bootstrap.min.js')}}"></script>
    <script src="{{asset(
      'front-end/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset(
      'front-end/js/main.js')}}"></script>
</head>
<body>
  <div class="login-container full-cover-background">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6" style="padding: 10px 0; color:#fff;">
            <h1 class="m-0 text-dark">B-Genius | Sistema Bibliotecario</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
        <div class="col-xs-12 col-sm-4 col-md-3">
            <img src="{{asset(
              'front-end/assets/img/brand.png')}}" alt="pdf" class="img-responsive center-box" style="max-width: 110px;">
        </div>
        <div class="col-xs-8 col-sm-6 col-md-6 text-justify lead">
          <h1 class="text-center all-tittles" style="margin-bottom: 30px; color:#fff;">Las Bibliotecas son puertas a otras vidas.</h1>
          <h4 class="text-center" style="margin-bottom: 30px; color:#fff;">De todos los instrumentos del hombre, el más asombroso es, sin duda, el Libro.</h4>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="form-container">
        <p class="text-center" style="margin-top: 17px;">
           <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
       </p>
       <h4 class="text-center all-tittles" style="margin-bottom: 30px;">Bienvendio para iniciar sesión haga clic en el siguiente boton</h4>
       @if (Route::has('login'))
           <div class="top-right links">
               @auth
                   <a href="{{ url('/home') }}">Inicio</a>
               @else
                   <a class="btn-login" href="{{ route('login') }}">Iniciar Sesión <i class="zmdi zmdi-arrow-right"></i></a>

               @endauth
           </div>
       @endif
    </div>
  </div>
</body>
</html>
