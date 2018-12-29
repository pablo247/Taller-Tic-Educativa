<!DOCTYPE html>
<html>
<head>
    @include('layout.administrator.blocks.metas')
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
      <img class="" src="/images/logo_TICeducativa_blanco.png" alt="Logotipo Tic Educativa" style="width:20rem;">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Iniciar sesión</p>

    <form method="POST" action="{{ route('login') }}">
      {{ csrf_field() }}
      
      <div class="form-group has-feedback">
        <input id="usuario" type="text" class="form-control" name="usuario" required autofocus placeholder="Usuario">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input id="password" type="password" class="form-control" name="password" required placeholder="Contraseña">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Acceder</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="#">Olvide mi contraseña</a><br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script src="{{ mix('/js/app_admin.js') }}"></script>

</body>
</html>
