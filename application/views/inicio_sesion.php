<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <title>INICIO SESION</title>
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
  <body class="hold-transition login-page" style="background-image: url('<?php echo base_url('assets/img/page/mifondo.jpg'); ?>'); background-size: cover;">
    
    <div class="login-box">
      <div class="login-logo">
        <a href="<?php echo base_url(); ?>"></a>
      </div>

      <!-- /.login-logo -->
      <div class="login-box-body">
        <h4 align="center">Login</h4>
        <center>
        <img src="<?php echo base_url('assets/template_dashboard/dist/img/logo.png'); ?>" class="logo" height="180"alt="">
         
      </center>
        <form id="formularioInicioSesion" action="<?php echo base_url('index.php/Inicio/validarDatosLogin'); ?>" method="POST" autocomplete="on">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="nombreUsuario" name="nombreUsuario" id="nombreUsuario" required style="text-transform:lowercase;">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-xs-4 pull-right">
              <button type="submit" class="btn btn-primary btn-block btn-flat">INICIAR</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        
        <!-- <a href="#">¿Olvidaste la contraseña?</a><br> -->
        

        <?php if ( isset($ErrorEnvioPost) ) { ?>
	        <div id="errorDatosSesion" class="box box-solid box-danger" style="margin-top: 18px; margin-bottom: 0px;">
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
    <script type="text/javascript">
        $( document ).ready(function(){
           $('.hide_msg').delay(2000).slideUp();
        });
    </script>


  </body>
</html>
