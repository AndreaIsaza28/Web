 <?php
	require_once('modelo.php');
	$codigo = $_POST['codigo'];
	$personas= new personas();
	$personas->consultar($codigo);
?>

 <!-- quick email widget -->

	<div class="box-header">
    	<i class="fa fa-user" aria-hidden="true"> Usuarios: </i>
        
        <!-- tools box -->
        <div class="pull-right box-tools">
        	<button class="btn btn-info btn-sm btncerrar2" data-toggle="tooltip" title="Cerrar"><i class="fa fa-times"></i></button>
        </div><!-- /. tools -->
    </div>
    <div class="box-body">

		<div align ="center">
				<div id="actual"> 
				</div>
		</div>


        <div class="panel-group"><div class="panel panel-primary">
            <div class="panel-heading">Datos</div>
            <div class="panel-body">
    
                <form class="form-horizontal" role="form"  id="frol">


 					<div class="form-group">
                        <label class="control-label col-sm-2" for="ID">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ID" name="ID" placeholder="Ingrese Codigo"
                            value = "<?php echo trim($personas->ID); ?>" readonly="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="USUARIO">Usuario:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="USUARIO" name="USUARIO" placeholder="Ingrese Usuario"
                            value = "<?php echo trim($personas->USUARIO); ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="CLAVE">Clave:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="CLAVE" name="CLAVE" placeholder="Ingrese Clave"
                            value = "<?php echo trim($personas->CLAVE); ?>">
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="ID_ROL">Rol:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="ID_ROL" name="ID_ROL" placeholder="Ingrese Rol"
                            value = "<?php echo trim($personas->ID_ROL); ?>">
                        </div>
                    </div>

					 <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" id="actualizar" data-toggle="tooltip" title="Actualizar Comuna" class="btn btn-primary">Actualizar</button>
                            <button type="button" id="cancelar" data-toggle="tooltip" title="Cancelar Edición" class="btn btn-success btncerrar2"> Cancelar </button>
                        </div>

                    </div>                    

					<input type="hidden" id="editar" value="editar" name="accion"/>
			</fieldset>

		</form>
	</div>
