<?php

session_start();
	error_reporting(0);
	$validacion = $_SESSION['usuario'];
	if ($validacion == null || $validacion == ' ') {
		header('location:index.html');
		die();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/menu.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<link rel="icon" type="icon/png" href="https://cdn-icons-png.flaticon.com/512/753/753352.png"> <!-- Icono en la parte superior -->
	<title>Inicio</title>
</head>
<body>
	<div class="Barra">
		<h2>Menu Admin</h2>
		<ul>
			<li><a href="">Inicio</a></li>
			<li><a class="collapse-item" href="Usuarios/index_usu.php">Usuarios</a></li>
		</ul>
		

	</div>
	
	

<!-- Contenido del texto -->

	<div class="contenido">
		<img src="imagen/menu_barra.png" alt="" class="menu_barra">
		<script src="js/abrir.js"></script>
		<h1>Bienvenid@ <?php echo $_SESSION['usuario']; ?></h1>
		<br>
		<div>
    		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#create">
			<span class="glyphicon glyphicon-plus"></span> Nuevo usuario   <i class="fa fa-plus"></i> </a></button>
				<a class="btn btn-warning" href="cerrar.php">Cerrar Sesion
      				<i class="fa fa-power-off" aria-hidden="true"></i>
       			</a>

	<?php
		$conexion=mysqli_connect("localhost","root","","personas"); 
		$where="";

		if(isset($_GET['enviar'])){
  			$busqueda = $_GET['busqueda'];


		if (isset($_GET['busqueda']))
			{
		$where="WHERE usuario LIKE'%".$busqueda."%' OR nombre  LIKE'%".$busqueda."%'
    		OR telefono  LIKE'%".$busqueda."%'";
			}
  
}


		?>
           <br>


			</form>
      <div class="container-fluid">
  <form class="d-flex">
      <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
      placeholder="Buscar con JS">
      <hr>
      </form>
  </div>

  <br>


      <table class="table table-striped table-dark table_id " id="tblDatos">

                   
                         <thead>    
                         <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Password</th>
                        <th>Telefono</th>
                        <th>Fecha</th>
                        <th>Rol</th>
                        <th>Acciones</th>
         
                        </tr>
                        </thead>
                        <tbody>

				<?php

$conexion=mysqli_connect("localhost","root","","r_user");               
$SQL="SELECT user.id, user.nombre, user.correo, user.password, user.telefono,
user.fecha, permisos.rol FROM user
LEFT JOIN permisos ON user.rol = permisos.id $where";
$dato = mysqli_query($conexion, $SQL);

if($dato -> num_rows >0){
    while($fila=mysqli_fetch_array($dato)){
    
?>
<tr>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['correo']; ?></td>
<td><?php echo $fila['password']; ?></td>
<td><?php echo $fila['telefono']; ?></td>
<td><?php echo $fila['fecha']; ?></td>
<td><?php echo $fila['rol']; ?></td>



<td>


<button type="button" class="btn btn-success edit" data-toggle="modal" data-target="#edit" value="<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil"></span> Editar </button>

  <a class="btn btn-danger"  href="eliminar_user.php?id=<?php echo $fila['id']?>">
<i class="fa fa-trash"></i></a>

</td>
</tr>


<?php
}
}else{

    ?>
    <tr class="text-center">
    <td colspan="16">No existen registros</td>
    </tr>

    
    <?php
    
}

?>


	</body>
  </table>
  <div id="paginador" class=""></div>
		</div>
		<br>
	</div>
	
	<div id="content">
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<h1 class="font-weigth-bold mb-0">Bienvenido</h1>
						<p class="lead text-muted">Revisa</p>
					</div>
				</div>
				
			</div>
		</section>
		
	</div>
</body>
</html>