<?php 
	include_once('../validacion/conexion.php');

	$ID = $_POST['ID'];
	$USUARIO = $_POST['USUARIO'];
	$PASSWORD = $_POST['PASSWORD'];
	$ROL = $_POST['ID_ROL'];

	$sql = "UPDATE personas SET USUARIO='$USUARIO', CLAVE='$PASSWORD', ID_ROL='$ID_ROL' WHERE ID = '$ID'";

	$query	= mysqli_query($conexion,$sql);

	if($query){
		header("location: ../Formularios/InicioAdmin.php");
	}
 ?> 