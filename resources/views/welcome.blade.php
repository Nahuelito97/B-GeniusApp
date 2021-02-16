
<!DOCTYPE html>
<html lang="es">
<head>
    <title>B-Genius</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="{{asset(
      'front-end/assets/icons/book.ico')}}" />
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
