
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="text-center all-tittles" style="margin-bottom: 30px; color:#fff;">B-Genius | Sistema Bibliotecario</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
        <div class="col-xs-12 col-sm-4 col-md-3">
            <img src="{{asset(
              'front-end/assets/img/flat-book.png')}}" alt="pdf" class="img-responsive center-box" style="max-width: 150px;">
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="form-container">
        <p class="text-center" style="margin-top: 17px;">
           <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
       </p>
       <h4 class="text-center all-tittles" style="margin-bottom: 30px;">inicia sesión con tu cuenta</h4>
       <form method="POST" action="{{ route('login') }}">
           @csrf
            <div class="group-material-login">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
              name="email" value="{{ old('email') }}" required autocomplete="email" maxlength="70" placeholder="Ingrese su correo electronico...">
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

            </div>
            <br>
            <div class="group-material-login">
              <input id="password" type="password"  class="form-control @error('password') is-invalid @enderror"
              name="password" required autocomplete="current-password" maxlength="70"
              placeholder="Ingrese su contraseña">
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <span class="highlight-login"></span>
              <span class="bar-login"></span>
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

            </div>

            <button class="btn-login" type="submit">Ingresar al sistema &nbsp; <i class="zmdi zmdi-arrow-right"></i></button>

            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label for="remember">
                    Mantener Sesión Iniciada
                  </label>
                </div>
              </div>

            </div>
        </form>
    </div>
  </div>
</body>
</html>
