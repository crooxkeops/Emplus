<?php
echo '
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="resources/lib/chart/chart.min.js"></script>
    <script src="resources/lib/easing/easing.min.js"></script>
    <script src="resources/lib/waypoints/waypoints.min.js"></script>
    <script src="resources/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="resources/lib/tempusdominus/js/moment.min.js"></script>
    <script src="resources/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="resources/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="resources/js/main.js"></script>';
    ?>
<script>
//Funciones Internas entre el servidor y la interface
function RegistrarUsuario()
{
 alert('desea continuar con la lectura de parametros?');
 var dll = 'registrarusuario';
  var namechanel = $('#namechanel').val();
  var fullnameuser = $('#fullnameuser').val();
  var pass = $('#pass').val();
  var pass2 = $('#pass2').val();
  var email = $('#email').val();
  var token = $('#token').val();
  var phone = $('#phone').val();;
  //alert('lectura de parametros encontrados son: -:namechanel'+namechanel+'-:fullnameuser'+fullnameuser+'-pass:'+pass+'-email:'+email+'-token:'+token+'-phone:'+phone);
  verification_namechanel(namechanel);
  verification_fullnameuser(fullnameuser);
  verification_password(pass,pass2);
  verification_email(email);
  verification_token(token);
  verification_phone(phone);
  var parametros = {
          "dll":dll,
          "namechanel" : namechanel,
          "fullnameuser": fullnameuser,
          "email":email,
          "pass":pass,
          "pass2": pass2,
          "token":token,
          "phone":phone
  };
  alert('Registrando');


  $.ajax({
          data:  parametros,
          url:   'app/tools-register-user.php',
          type:  'post',
          beforeSend: function ()
          {
            $('#usr_r').val('');
            $('#pass1_r').val('');
            $('#pass2_r').val('');
            $('#email_r').val('');
            $('#prof_r').val('');
            $("#result_r").html("Verificando...");
          },
          success:  function (response)
          {
                  $("#result_r").html(response);

          }
  });

}
function verification_namechanel(namechanel)
{
    //alert('Verificando namechanel:'+namechanel+'...');
    var dll='verification_namechanel';
    var parametros ={"dll":dll,"namechanel":namechanel};
    $.ajax({
            data:parametros,
            url:'app/tools-register-user.php',
            type: 'post',
            beforeSend:function()
            {
                $('#namechanel').val(namechanel);
                 $("#result_r").html('Verificando namechanel:'+namechanel);
            },
            success:function(response)
            {
                
                if(response=='true')
                {
                    $("#result_r").html('Este Canal Ya se encuentra registrado...');
                    $('#namechanel').val('');
                }
                if(response=='false')
                {
                    $("#result_r").html('resultado:'+response);
                    $('#namechanel').val(namechanel);                    
                }
            }
    });
}
function verification_fullnameuser(fullnameuser)
{
    alert('Verificando fullnameuser:'+fullnameuser+'...');
    var dll='verification_fullnameuser';
    var parametros={"":dll,"fullnameuser":fullnameuser};
    $.ajax({
            data:parametros,
            url:'app/tools-register-user.php',
            type:'post',
            beforeSend:function()
            {
                $('#fullnameuser').val(fullnameuser);
                $('#result_r').html('Verificando fullnameuser:'+fullnameuser);
            },
            success:function(response)
            {
                if(response=='true')
                {
                    $("#result_r").html('Este nombre de usuario Ya se encuentra registrado...');
                    $('#fullnameuser').val('');
                }
                if(response=='false')
                {
                    $("#result_r").html('resultado:'+response);
                    $('#fullnameuser').val(namechanel);                    
                }
            }
    
    });

}
function verification_password(pass,pass2)
{
    alert('Verificando Clave de seguridad:');
}
function verification_email(email)
{
    alert('Verificando email:'+email);
}
function verification_token(token)
{
    alert('Verificando token:'+token);
}
function verification_phone(phone)
{
    alert('Verificando phone:'+phone);
}

</script>
