<!DOCTYPE html>
<html> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="icon/png" href="imagen/logo.png"> <!-- Icono en la parte superior -->
	<link rel="stylesheet" type="text/css" href="css/style1.css" media="all"> <!-- Llamo el css de la pantalla del login -->
    <link rel="stylesheet" href="css/sweetalert.css">
	<title>Login</title>
	
</head>

<body>

<div class="formulario">
	<form method="post" class="" id="form">
		<h2><img src="imagen/icon2.png"></h2>
		<?php include('validacion/conexion.php');
		include "Controlador/controlador_login.php"; ?>

		<!--Caja de texto Usuario-->
		<div class="input-group">
            <div class="input-group-addon"><i class="fa fa-user" ></i></div>
            <input type="text" class="formanag_input formanag_user" name="usuario" placeholder=" Usuario" id="usuario">
        </div>
		
		<!-- Div espaciador -->
            <div style="clear:both; margin:10px" > </div>

		<!--Caja de texto Clave-->

		<div class="input-group">
            <div class="input-group-addon"><i class="fa fa-lock"></i></div>
            <input type="password" autocomplete="off" class="formanag_input formanag_password" name="password" placeholder=" Clave" id="password">
        </div>

		<!--Ver la clave que hay en la caja de texto de clave-->
		<div class="view">
			<div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
		</div>

		<!--Boton de Iniciar Sesion-->
		<input type="submit" name="btningresar" class="btn" value="Iniciar Sesion" id="btningresar">

		<!--Ver la clave que hay en la caja de texto de clave-->
		<div class="view">
			<div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
		</div>

	</form>

	<div id="error"></div>
</div>
</body>
</html>