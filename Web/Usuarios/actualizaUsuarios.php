<?php
	require_once('modelo.php');
    $datos = $_POST;        
	$personas = new personas();
	$personas->editar($datos);
?>