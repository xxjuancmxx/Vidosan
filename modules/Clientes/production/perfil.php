<?php
  session_start();
  if($_SESSION['rol']!="2"){
    header('Location: ../../../index.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Perfil</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

    <!-- sweetalert-->
    <script src="../vendors/sweetalert2/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="../vendors/sweetalert2/sweetalert2.min.css">

    <!-- PopUp -->
    <script src="js/popups.js"></script>
    
    <script type="text/javascript">
      function cerrarError(){
        $("#perfilError").hide();
      }
      function cerrarSuccess(){
        $("#perfilSuccess").hide();
      }
      function resetear(){
        $("#formPerfil").reset();
        /*cerrarError();
        cerrarSuccess();*/
      }
      function validarFormularioPerfil(){
        // Ocultamos los mensajes por si ya habian aparecido
        cerrarSuccess();
        cerrarError();

        var nombre = $("#nombrePerfil").val();
        var apellidos = $("#apellidosPerfil").val();
        var tlf = $("#tlfPerfil").val();
        var email = $("#emailPerfil").val();
        var provincia = $("#provinciaPerfil").val();
        var municipio = $("#municipioPerfil").val();
        //alert(nombre + " " + apellidos + " " + tlf + " " + email + " " + provincia + " " + municipio);
        // validaciones
      	var datosCorrectos = true;
        if(/(^[A-Z])([a-z]+)$/.test(nombre)){ // Primera letra en mayuscula seguida de varias minusculas
          $("#nombrePerfil").css("box-shadow","");
        }else{
          $("#nombrePerfil").css("box-shadow","0px 0px 13px 2px rgba(255,0,0,1)");
          datosCorrectos = false;
        }
        if(/(^[A-Z])([a-z]+)(\s)([A-Z])([a-z]+)$/.test(apellidos)){ // Primera letra en mayuscula seguida de varias minusculas + espacio + Primera letra en mayuscula seguida de varias minusculas
          $("#apellidosPerfil").css("box-shadow","");
        }else{
          $("#apellidosPerfil").css("box-shadow","0px 0px 13px 2px rgba(255,0,0,1)");
          datosCorrectos = false;
        }
        if(/(^[0-9]{9})$/.test(tlf)){ // nueve numeros
          $("#tlfPerfil").css("box-shadow","");
        }else{
          $("#tlfPerfil").css("box-shadow","0px 0px 13px 2px rgba(255,0,0,1)");
          datosCorrectos = false;
        }
        if(/(^[a-z]+)([._\-]?([a-z0-9]*)?)@([a-z]+)([.]([a-z]{2,3}))$/.test(email)){ // validacion de un email estandar
          $("#emailPerfil").css("box-shadow","");
        }else{
          $("#emailPerfil").css("box-shadow","0px 0px 13px 2px rgba(255,0,0,1)");
          datosCorrectos = false;
        }
        if(/(^[A-Z])([a-z]+)$/.test(provincia)){ // Primera letra en mayuscula seguida de varias minusculas
          $("#provinciaPerfil").css("box-shadow","");
        }else{
          $("#provinciaPerfil").css("box-shadow","0px 0px 13px 2px rgba(255,0,0,1)");
          datosCorrectos = false;
        }
        if(/(^[A-Z])([a-z]+)$/.test(municipio)){ // Primera letra en mayuscula seguida de varias minusculas
          $("#municipioPerfil").css("box-shadow","");
        }else{
          $("#municipioPerfil").css("box-shadow","0px 0px 13px 2px rgba(255,0,0,1)");
          datosCorrectos = false;
        }

      	// Mostramos el alert y si es correcto usamos el ajax
      	if(datosCorrectos){
      		$("#perfilSuccess").show();
          var resultado = $.ajax({
            url: '../actions/validarPerfil.php',
            async: true,
            type: 'post',
            data: {
              nombrePerfil: nombre,
              apellidosPerfil: apellidos,
              tlfPerfil: tlf,
              emailPerfil: email,
              provinciaPerfil: provincia,
              municipioPerfil: municipio
            }
          }).done(function() {
            if(resultado.responseText != ""){
              alert("Ha ocurrido un error con el servidor");
            }
          }).fail(function() {
            console.log("error");
          });
      	}else{
      		$("#perfilError").show();
      	}
      }
    </script>
  </head>
    <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!-- sidebar menu -->
          <?php
            include("components/side-menu.php");
          ?>
        <!-- /sidebar menu -->
        <!-- top navigation -->
          <?php
            include("components/top-navigation.php");
          ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row" id="filaPerfil">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Perfil</h2>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">
                <!-- Mensajes estado -->
                  <div id="perfilSuccess" class="alert alert-success" style="display:none">
                    <a class="close" aria-label="close" onclick="cerrarSuccess()"><i class="fa fa-times"></i></a>
                    <strong>Datos actualizados correctamente</strong>
                  </div>
                  <div id="perfilError" class="alert alert-error" style="display:none">
                    <a class="close" aria-label="close" onclick="cerrarError()"><i class="fa fa-times"></i></a>
                    <strong>Datos no válidos</strong>
                  </div>

                  <form id="formPerfil" action="#" method="post" class="form-horizontal form-label-left">
                    <!-- Nombre -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombrePerfil">Nombre <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="nombrePerfil" name="nombrePerfil" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $_SESSION['nombre_cliente'] ?>">
                      </div>
                    </div>
                    <!-- Apellidos -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellidosPerfil">Apellidos <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="apellidosPerfil" name="apellidosPerfil" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $_SESSION['apellidos']?>">
                      </div>
                    </div>
                    <!-- Telefono -->
                    <div class="form-group">
                      <label for="tlfPerfil" class="control-label col-md-3 col-sm-3 col-xs-12">Teléfono <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="tlfPerfil" name="tlfPerfil" required="required" class="form-control col-md-7 col-xs-12" type="text" value="<?php echo $_SESSION['tlf']?>">
                      </div>
                    </div>
                    <!-- Email -->
                    <div class="form-group">
                      <label for="emailPerfil" class="control-label col-md-3 col-sm-3 col-xs-12">Correo electrónico <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="emailPerfil" name="emailPerfil" required="required" class="form-control col-md-7 col-xs-12" type="text" value="<?php echo $_SESSION['email'] ?>">
                      </div>
                    </div>
                    <!-- Provincia -->
                    <div class="form-group">
                      <label for="provinciaPerfil" class="control-label col-md-3 col-sm-3 col-xs-12">Provincia <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="provinciaPerfil" name="provinciaPerfil" required="required" class="form-control col-md-7 col-xs-12" type="text" value="<?php echo $_SESSION['provincia'] ?>">
                      </div>
                    </div>
                    <!-- Municipio -->
                    <div class="form-group">
                      <label for="municipioPerfil" class="control-label col-md-3 col-sm-3 col-xs-12">Municipio <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="municipioPerfil" name="municipioPerfil" required="required" class="form-control col-md-7 col-xs-12" type="text" value="<?php echo $_SESSION['municipio'] ?>">
                      </div>
                    </div>
                    <!-- Botones -->
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5 col-sm-offset-5 col-xs-offset-4">
                        <a name="enviar" id="enviar" class="btn btn-success" onclick="validarFormularioPerfil()">Enviar</a>
                        <button class="btn btn-danger" onclick="resetear()">Reiniciar</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php
          include("components/footer.php");
        ?>
        <!-- /footer content -->
      </div>
    </div>


    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>
