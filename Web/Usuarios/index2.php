<?php
    //Validacion si hay algun usuario logeado
   // session_start();
   // error_reporting(0);
   // $validar = $_SESSION['usuario'];
   // if( $validar == null || $validar = ''){
   // header("Location:../index.html"); // Si no hay ninguno lo retorna al login
//die();

//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Usuarios</title>
  <meta charset="utf-8">

  <link rel="stylesheet" href="../css/stylehome.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <!--Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="icon" type="icon/png" href="https://cdn-icons-png.flaticon.com/512/753/753352.png"> <!-- Icono en la parte superior -->
</head>


<body  oncontextmenu="return false" onkeydown="return false">


        
    <div class="container1x">
        <div class="jumbotroan"> 
            <h2>LISTADO DE USUARIOS</h2>   
        </div>
    </div>

    <div class="container">
        <div class="panel-group">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="form-group" id="opciones">        
                        <div class="col-sm-10">
                        <?php
    								include "Usuario.php"
    							?>         
                       <!--<a class="btn btn-primary" href="usuario.php" role="button">Usuarios</a>-->
                        </div>
                    </div>
                </div>


                <div class="panel-group hide" id="contenedor"><div class="panel panel-primary">
                <div class="panel-heading" id="titulo"></div>
            
                <div class="panel-body">
                    <div class="form-group" id="contenido"></div>
                </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

    <!-- Funciones de Lógica de negocio -->
    <script src="../js/funciones.js"></script>
    <script>
        $(document).ready(Inicio);
    </script>
</body>
</html>