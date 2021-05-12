<!doctype html>
<html lang="es">
<head>
 <link rel="icon" type="image/png" href="Factur Logo2.png">
    <title>Factur</title>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


	<style>body{padding-top: 60px;}</style>

    <link href="assets/css/bootstrap.css" rel="stylesheet" />

	<link href="assets/css/login-register.css" rel="stylesheet" />
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

	<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.js" type="text/javascript"></script>
	<script src="assets/js/login-register.js" type="text/javascript"></script>

</head>
<body>
    <body style="background: url(fondo.jpeg); width: 100%;   background-size: cover;" >   
    <div class="container">
        <div class="row">
            <div class="col-sm-4"> </div>
            <div class="col-sm-4">
                 <a class="btn big-login" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Iniciar sesión</a>
                 <a class="btn big-register" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">Registrarse</a></div>
        </div>
        



		 <div class="modal fade login" id="loginModal">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Iniciar sesión con</h4>
                    </div>
                    <div class="modal-body">
                        <div class="box">
                        <form method="POST"  name="form-work" action="validar.php">
                             <div class="content">
                             <div class="col-sm-4"> <img class="img" src="../Login Factur/Factur Logo.png"/></div>
                                <div class="error"></div>
                                <div class="form loginBox">
                                  <!--  <form method="" action="" accept-charset="UTF-8">-->
                                    <input id="emailinicio" class="form-control" type="text" placeholder="Correo" name="email" required>
                                    <input id="passwordinicio" class="form-control" type="password" placeholder="Contraseña" name="password" required>
                                    <button id = "inicio" type="submit" class="btn btn-default btn-login">Iniciar sesión </button>
                                </div>
                             </div>
                             </form>
                        </div>
                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                            
                             <div class="form">
                                <form method="POST" html="{:multipart=>true}" data-remote="true" action="registroUsuario.php" accept-charset="UTF-8">
                                <input id="emailregistro" class="form-control" type="text" placeholder="Correo" name="email2" required>
                                <input id="passwordregistro" class="form-control" type="password" placeholder="Contraseña" name="password2" required>
                                <input id="password_confirmation" class="form-control" type="password" placeholder="Repetir contraseña" name="password_confirmation" required>
                                <button id = "inicio" type="submit" class="btn btn-default btn-login">Crear Cuenta </button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Buscando
                                 <a href="javascript: showRegisterForm();">crear una cuenta</a>
                            ?</span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                             <span>Ya tienes una cuenta?</span>
                             <a href="javascript: showLoginForm();">Iniciar sesión</a>
                        </div>
                    </div>
    		      </div>
		      </div>
		  </div>
    </div>


</body>
</html>
