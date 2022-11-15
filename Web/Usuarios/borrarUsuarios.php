<?php
	require_once('modelo.php');
	$codigo = $_POST['codigo'];
	$personas = new personas();
	$personas->borrar($codigo);
?>