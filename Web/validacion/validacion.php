<?php
  $USUARIO=$_POST['usuario'];
  $CLAVE=$_POST['clave'];
  session_start();
  $_SESSION['usuario']=$USUARIO;

  include('conexion.php');

    $consulta = "SELECT * FROM personas Where usuario ='$USUARIO' and clave = '$CLAVE'";
    $respuesta = mysqli_query($conexion,$consulta); //simplifica la acción de ejecutar una consulta
    $filas = mysqli_fetch_array($respuesta); // guardar la información en índices asociativos

        if($filas['id_rol']==1){
          header("location:../Formularios/InicioAdmin.php");
        }else 
        if($filas['id_rol']==2){
          header("location:../Formularios/InicioCliente.php");
        }else

         header("location:../login.php");     
        
      mysqli_free_result($respuesta);
      mysqli_close($conexion);

      ?>