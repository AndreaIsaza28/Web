<?php
	require_once('modelo.php');
		
	$datos = array(
	'ID'=>$_POST['ID'],
	'USUARIO'=>$_POST['USUARIO'],
	'CLAVE'=>$_POST['CLAVE'],
	'ID_ROL'=>$_POST['ID_ROL']
	);
	
	$personas = new personas();
	$personas->nuevo($datos);
	
?>