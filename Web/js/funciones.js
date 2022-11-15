function Inicio(){

	$("#opciones a").click(function(e){
     	e.preventDefault();
        url = $(this).attr("href");

        $.post( url, function(data) {
        		if(url!="#")
        			$("#contenedor").removeClass("hide");
        			$("#contenedor").addClass("show");
        			$("#titulo").html("Listado de Usuarios");
                	$("#contenido" ).html(data);
        });
     });

	$("#contenido").on("click","button.btncerrar",function(){
		$("#contenedor").removeClass("show");
       	$("#contenedor").addClass("hide");
	})

	$("#contenido").on("click","button.btncerrar2",function(){
		$("#titulo").html("Listado Usuarios");
		$( "#contenido" ).load("../Formularios/InicioAdmin2.php");	
	})

	$("#contenido").on("click","a.borrar",function(){
		//Recupera datos del formulario
		var codigo = $(this).attr("codigo");
		if ( confirm("¿Realmente desea borrar el registro?")){		
			$.ajax({
        		method: "post",
            	url: "../Formularios/controlador.php",
            	data: {codigo: codigo, accion:'borrar'},
            	dataType: "html"
        	})  .done(function( result ) {
        		$("#titulo").html("Listado Usuarios");
        		$( "#contenido" ).load("../Formularios/InicioAdmin2.php");
        	});

		}
	});
	
	$("#contenido").on("click","a.editar",function(){
		$("#titulo").html("Editar Usuario");
		//Recupera datos del fromulario
		var codigo = $(this).attr("codigo");
		$.ajax({
			type:"post",
			url:"../Formularios/editarU.php",
			data:"codigo=" + codigo,
			dataType:"html"
        	}) .done(function( result ) {
        		$("#contenido").html(result);
        	});
	});
	
	$("#contenido").on("click","button#actualizar",function(){

		$("#titulo").html("Listado Usuarios");
        var datos=$("#frol").serialize();
            $.ajax({
			type:"post",
			url:"../Formularios/controlador.php",
			data: datos,
			dataType:"html"
        	}) .done(function( result ) {
        		$( "#contenido" ).load("../Formularios/InicioAdmin2.php");
        	});
	});
	
	$("#contenido").on("click","button#nuevor",function(){
		$("#titulo").html("Nuevo Usuario");
		$( "#contenido" ).load("../Formularios/nuevo.php");	
	})
	
	$("#contenido").on("click","button#grabar",function(){
		var datos=$("#frol").serialize();
		$.ajax({
			type:"post",
			url:"../Formularios/controlador.php",
			data:datos,
			dataType:"html",
			success:function(result){
				$("#titulo").html("Listado Usuarios");
				$("#contenido" ).load("../Formularios/InicioAdmin2.php");
			}
		})
	});	
//Usuarios

}