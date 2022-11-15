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


<body>
    <!--<div class="container4">
			<div class="navbar">
				<img src="../imagen/logo.png" class="logo4" alt="Main Logo">
					<ul>
						<li><a href="../cerrar.php">CERRAR SESION</a></li>
                    </div>
                </div>
					</ul>
			</div>	
		</div>-->
        


    <div class="container1x">
        <div class="jumbotroan"> 
            <h3>LISTADO DE USUARIOS</h3>   
        </div>
    </div>

    <div class="container">
        <div class="panel-group">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="form-group" id="opciones">        
                        <div class="col-sm-10">
                        <div class="box-header">
                        <?php
	require_once('modelo.php');
	$personas = new personas();
	$listado = $personas->lista();
?>
    <i class="ion ion-clipboard"></i>
     <!-- tools box -->
    <div class="pull-right box-tools">
    	<button class="btn btn-info btn-sm" id="nuevor"  data-toggle="tooltip" title="Nuevo Usuario"><i class="fa fa-plus" aria-hidden="true"></i></button> 
    	<button class="btn btn-info btn-sm btncerrar"  data-toggle="tooltip" title="Ocultar"><i class="fa fa-times"></i></button>

    </div><!-- /. tools -->
                  
</div><!-- /.box-header -->
<div class="box-body">
             
<table id="tabla" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Codigo</th>
			<th>Nombre</th>
			<th>Clave</th>
			<th>Rol</th>
			<th>Eliminar</th>
			<th>Editar</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($listado as $fila){ ?>
			<tr>
				<td><?php echo $fila['ID'] ?></td>
				<td><?php echo utf8_encode($fila['USUARIO']) ?></td>
				<td><?php echo utf8_encode($fila['CLAVE']) ?></td> 
				<td><?php echo utf8_encode($fila['ID_ROL']) ?></td> 
				<td align='center'> 
				<a class="btn btn-danger borrar" href="#" data-toggle="tooltip" codigo="<?php echo  $fila['ID'] ?>">
  					<i class="fa fa-trash-o"  aria-hidden="true"></i>
  					<span class="sr-only">Eliminar</span>
				</a> </td> 
				<td align='center'>
				<a class="btn btn-primary editar" href="#" data-toggle="tooltip" codigo="<?php echo $fila['ID'] ?>">
  					<i class="fa fa-pencil"  aria-hidden="false"></i>
  					<span class="sr-only">Editar</span>
				</a> </td> 
			</tr>
	<?php } ?>
	</tbody>

</table>

</div><!-- /.box-body -->  

<!-- Funciones de Lógica de neogcio -->
<script>
    $(document).ready(function(){
    	$("#tabla").DataTable();
    });
</script>             
                        <!--<a class="btn btn-primary" href="index.php" role="button">Usuarios</a>-->
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