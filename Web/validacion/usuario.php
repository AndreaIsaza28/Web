<?php
  require_once('conexion2.php');
  class Usuario extends Conexion {
    public function login($user, $clave)
    {
     
      parent::conectar();
      $user  = parent::salvar($user);
      $clave = parent::salvar($clave);
      $consulta ="SELECT * FROM personas Where USUARIO ='$user' and CALVE = '$clave'";
      $verificar_usuario = parent::verificarRegistros($consulta);

      if($verificar_usuario > 0){
        $consulta ="SELECT * FROM personas Where USUARIO ='$user' and CALVE = '$clave'";
        $user = parent::consultaArreglo($consulta);
        session_start();
        $_SESSION['ID'] = $user['ID'];
        $_SESSION['ID_ROL']  = $user['ID_ROL'];
        if($_SESSION['ID_ROL'] == 1){
          echo '../Formularios/InicioAdmin.php';
        }else if($_SESSION['ID_ROL'] == 2){
          echo '../Formularios/InicioCliente.php';
        }
      }else{
        echo 'error_3';
      }
      parent::cerrar();
    }

  }
?>
