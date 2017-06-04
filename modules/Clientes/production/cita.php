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

    <title>Vidosan - <?php echo $_SESSION['nombre_cliente'] ?></title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

    <!-- sweetalert-->
    <script src="../vendors/sweetalert2/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="../vendors/sweetalert2/sweetalert2.min.css">

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>

    <!-- PopUp -->
    <script src="js/popups.js"></script>

    <script type="text/javascript">
        var medicos;

        function cambiarFormato(){
            var aux = $("#single_cal4").val().split("/");
            $("#single_cal4").val(aux[1] + "/" + aux[0] + "/" + aux[2]);
        }
        function validarCita(){
            var desc = $("#descripcionCita").val();
            // Fecha introducida
            var fecha = $("#single_cal4").val();
            var fechaAux = $("#single_cal4").val().split("/");
            // Fecha actual
            var fechaActual = new Date();
            var diaActual = fechaActual.getDate();
            var mesActual = fechaActual.getMonth() + 1;
            var yearActual = fechaActual.getFullYear();

            if(fechaActual.getDate()<10){
                diaActual = "0" + fechaActual.getDate();
            }

            var datosCorrectos = validarFecha(fecha,diaActual,mesActual,yearActual); // Si la cita se ha pedido para minimo un dia despues de hoy
            if(datosCorrectos){
              datosCorrectos = validarDescripcion(desc); // true si se ha rellenado la descripcion
            }
            
            if(datosCorrectos){
                // Medico seleccionado
                var idMedico = $("#select-medico").val();

                $.ajax({
                    url: '../actions/insertarCita.php',
                    async: true,
                    type: 'post',
                    data: {
                      id: idMedico,
                      desc: desc,
                      fecha_insercion: yearActual + "/" + mesActual + "/" + diaActual,
                      fecha_cita: fechaAux[2] + "/" + fechaAux[1] + "/" + fechaAux[0]
                    }
                }).done(function() {
                    popUpInsertarCita();
                }).fail(function() {
                    console.log("error");
                });
            }
        }

        function validarFecha(fecha,diaActual,mesActual,yearActual){
            var fechaSplit = fecha.split("/");// dia mes año
            if(fechaSplit[2] < yearActual){
                $("#single_cal4").css("box-shadow","0px 0px 13px 2px rgba(255,0,0,1)");
                popUpFechaCitaNoValida();
                return false;
            }else if(fechaSplit[2] == yearActual && fechaSplit[1] < mesActual){
                $("#single_cal4").css("box-shadow","0px 0px 13px 2px rgba(255,0,0,1)");
                popUpFechaCitaNoValida();
                return false;
            }else if(fechaSplit[2] == yearActual && fechaSplit[1] == mesActual && fechaSplit[0] <= diaActual){
                $("#single_cal4").css("box-shadow","0px 0px 13px 2px rgba(255,0,0,1)");
                popUpFechaCitaNoValida();
                return false;
            }else{
              $("#single_cal4").css("box-shadow","");
              return true;
            }
        }

        function validarDescripcion(descripcion){
            if($("#descripcionCita").val() != ""){
                $("#descripcionCita").css("box-shadow","");
            }else{
                $("#descripcionCita").css("box-shadow","0px 0px 13px 2px rgba(255,0,0,1)");
                return false;
            }
            return true;
        }

        $(document).ready(function(){
            var resultado = $.ajax({
            url: '../actions/cogerMedicos.php',
            async: true,
            type: 'post',
            data: {
              id: <?php echo $_SESSION['id']; ?>
            }
          }).done(function() {
            $("#select-medico").html(resultado.responseText);
          }).fail(function() {
            console.log("error");
          });
        });
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
                  <h2>Pedir una cita</h2>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">
                  <form id="formPerfil" action="#" method="post" class="form-horizontal form-label-left">
                    <!-- Fecha -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha <span class="required">*</span>
                      </label>
                      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 xdisplay_inputx has-feedback" onchange="cambiarFormato()">
                        <input type="text" class="form-control has-feedback-left" id="single_cal4">
                        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                      </div>
                    </div>
                    <!-- Descripcion -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Descripción <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="form-control col-md-7 col-xs-12" id="descripcionCita" name="descripcionCita" rows="3" required="required" placeholder="Describa brevemente el motivo de la consulta"></textarea>
                      </div>
                    </div>
                    <!-- Medico -->
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Escoja a su médico</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="select-medico"></select>
                        </div>
                      </div>
                    <!-- Botones -->
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5 col-sm-offset-5 col-xs-offset-4">
                        <a name="enviar" id="enviar" class="btn btn-success" onclick="validarCita()">Enviar</a>
                        <a class="btn btn-danger" href="index.php">Cancelar</a>
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
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
