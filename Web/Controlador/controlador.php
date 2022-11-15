<?php
  $user = $_POST['user_php'];
  $clave = $_POST['clave_php'];
  if(empty($user) || empty($clave)){
    echo 'error_1';
  }else{
    require('validacion/usuario.php');
    $user = new user();
    $user -> login($user, $clave); 
  }
?>
