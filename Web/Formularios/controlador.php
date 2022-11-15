<?php
require_once 'modelo.php';
$datos = $_POST;
switch ($_POST['accion']){
    case 'editar':
        $personas = new personas();
		$personas->editar($datos);
        break;
    case 'nuevor':
        $personas = new personas();
		$personas->nuevo($datos);
        break;
    case 'borrar':
		$personas = new personas();
		$personas->borrar($datos['ID']);
        break;
}
?>
