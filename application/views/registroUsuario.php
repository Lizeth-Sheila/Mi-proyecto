<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <title>Registr de Usuario</title>
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/page/'); ?>" />
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/template_dashboard/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/template_dashboard/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url('assets/template_dashboard/bower_components/Ionicons/css/ionicons.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/template_dashboard/dist/css/AdminLTE.min.css');?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('assets/template_dashboard/plugins/iCheck/square/blue.css'); ?>">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- jQuery 3 -->
    <script src="<?php echo base_url('assets/template_dashboard/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url('assets/template_dashboard/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('assets/template_dashboard/plugins/iCheck/icheck.min.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/template_dashboard/dist/js/adminlte.min.js'); ?>"></script>

  </head>
  <body class="hold-transition login-page" style="background-image: url('<?php echo base_url('assets/img/page/background_login.jpg'); ?>'); background-size: cover;">
    
    <div class="login-box">
      <div class="login-logo">
        <a href="<?php echo base_url(); ?>"><b>Registro Usuario</b></a>
      </div>

      <!-- /.login-logo -->
      <div class="login-box-body">
        
        <p class="login-box-msg">Ingresa para iniciar tu sesion</p>
        <form action="registrarusuario" accept-charset="utf-8" method="post" id="guardar">
    <center><h5>Registro de usuarios</h5></center>
    <div class="input-field col l4 push-l4">
      <input type="text" name="nombres">
      <label for="nombres">Nombres</label>
    </div>
    <div class="clearfix"></div>
    <div class="input-field col l4 push-l4">
      <input type="text" name="primerApellido">
      <label for="primerApellido">Primer Apellido</label>
    </div>
    <div class="clearfix"></div>
    <div class="input-field col l4 push-l4">
      <input type="text" name="segundoApellido">
      <label for="segundoApellido">Segundo Apellido</label>
    </div>
    <div class="clearfix"></div>
    <div class="input-field col l4 push-l4">
      <input type="text" name="ci">
      <label for="ci">C.I.</label>
    </div>
    <div class="clearfix"></div>
    <div class="input-field col l4 push-l4">
      <input type="text" name="email">
      <label for="email">Email</label>
    </div>
    <div class="clearfix"></div>
    <div class="input-field col l4 push-l4">
      <input type="text" name="password">
      <label for="password">Contraseña</label>
    </div>
    <div class="clearfix"></div>
    <div class="input-field col l4 push-l4">
      <input type="text" name="password2">
      <label for="password2">Confirme su contraseña</label>
    </div>
    <div class="clearfix"></div>
    <center><input type="submit" class="btn teal" value="Registrar"></center>
  </form>
        
        <!-- <a href="#">¿Olvidaste la contraseña?</a><br> -->
        <a href="<?php echo base_url('Login') ?>" class="text-center">Regresar.</a>

        <?php if ( isset($ErrorEnvioPost) ) { ?>
	        <div id="errorDatosSesion" class="box box-solid box-danger" style="margin-top: 15px; margin-bottom: 0px;">
	            <div class="box-header">
	                <h3 class="box-title">Error en la Autenticación.</h3>
	            </div><!-- /.box-header -->
	            <div class="box-body">
	            	<?php echo $datoError; ?>
	            </div><!-- /.box-body -->
	        </div>
       	<?php } ?>

      </div>
      <!-- /.login-box-body -->
    </div>

  </body>
</html>
