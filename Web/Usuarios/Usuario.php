<?php
	require_once('modelo.php');
	$personas = new personas();
	$listado = $personas->lista();
?>

<div class="box-header">
    <i class="ion ion-clipboard"></i>
     <!-- tools box -->
    <div class="pull-right box-tools">
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
		</tr>
	</thead>
	<tbody>
	<?php foreach($listado as $fila){ ?>
			<tr>
				<td><?php echo $fila['ID'] ?></td>
				<td><?php echo utf8_encode($fila['USUARIO']) ?></td>
				<td><?php echo utf8_encode($fila['CLAVE']) ?></td> 
				<td><?php echo utf8_encode($fila['ID_ROL']) ?></td>  
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