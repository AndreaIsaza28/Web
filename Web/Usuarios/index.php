<?php
	require_once('modelo.php');
	$personas = new personas();
	$listado = $personas->lista();
?>

<div class="box-header">
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