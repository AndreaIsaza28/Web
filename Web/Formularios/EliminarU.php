<?php 
	include_once('../validacion/conexion.php');
	
	$ID = $_REQUEST['ID'];

	$sql = "DELETE FROM personas WHERE id = '$ID'";

	$query	= mysqli_query($conexion,$sql);

	if($query ===true){
		header("location: ../Formularios/InicioAdmin.php");
	}
?>