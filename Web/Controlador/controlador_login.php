<?php 
	

	if (!empty($_POST['btningresar'])) {
		if (!empty($_POST['usuario'] and !empty($_POST['password']))) {
			$USUARIO = $_POST['usuario'];
			$PASSWORD = $_POST['password'];

			$sql = $conexion->query("SELECT * FROM personas Where usuario ='$USUARIO' and clave = '$PASSWORD'");

			if ($datos=$sql -> fetch_object()) {

				$sql = ("SELECT * FROM personas Where usuario ='$USUARIO' and clave = '$PASSWORD'");
				$respuesta = mysqli_query($conexion,$sql); //simplifica la acción de ejecutar una consulta
    			$filas = mysqli_fetch_array($respuesta); // guardar la información en índices asociativos

				if ($filas['ID_ROL']==1) {
					header("location:Formularios/InicioAdmin.php");
				}else 
        		if($filas['ID_ROL']==2){
         			header("location:Formularios/InicioCliente.php");
         		}
			}else{
				echo "<div class='alert alert-danger'>Acceso denegado</div>";
			}
		}else{
			echo "Campos Vacios";
		}
	}
 ?>