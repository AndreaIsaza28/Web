$('#login').click(function(){
  var user  = $('#user').val();
  var clave = $('#clave').val();
  $.ajax({
    method: 'POST',
    url: 'Controlador/controlador.php',
    data: {user_php: user, clave_php: clave},
    beforeSend: function(){
      $('#load').show();
    },
    success: function(res){
      $('#load').hide();
      if(res == 'error_1'){
        swal('Error', 'Por favor ingrese todos los campos', 'error');
      }else if(res == 'error_3'){
        swal('Error', 'El user y contraseña que ingresaste es incorrecto', 'error');
      }else{
        //window.location.href= res
      }
    }
  });
});
