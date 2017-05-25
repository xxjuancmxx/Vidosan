<?php
  session_start();
  if($_SESSION['rol']!="2"){
    header('Location: ../../../index.php');
  }
  include("../../../BBDD/conexion.php");
  include("entities/Expediente.php");
  include("entities/Incidencia.php");
  $expedienteAux = buscarExpediente($_SESSION['id']);
  $incidenciasAux = buscarIncidencias($expedienteAux['id_expediente']);
  // Creamos objetos Incidencia y los guardamos en un array
  $incidencias = array();
  for($i = 0;$i < count($incidenciasAux);$i++){
    $incidencia = new Incidencia($incidenciasAux[$i]['id_incidencia'],utf8_encode($incidenciasAux[$i]['categoria']),utf8_encode($incidenciasAux[$i]['descripcion']),$incidenciasAux[$i]['fecha_incidencia'],utf8_encode($incidenciasAux[$i]['centro']),utf8_encode($incidenciasAux[$i]['servicio']),utf8_encode($incidenciasAux[$i]['lugar']));
    $incidencias[$i] = $incidencia;
  }
  // Creamos objeto Expediente
  $expediente = new Expediente($expedienteAux['id_expediente'],$expedienteAux['fecha_insercion'],$incidencias);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Expediente</title>

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
  </head>
    <body class="nav-md">
      <?php
        $fecha = explode("-",$_POST['fecha']);
        switch ($fecha[1]) {
          case '01':
            $mes = "Enero";
            break;
          case '02':
            $mes = "Febrero";
            break;
          case '03':
            $mes = "Marzo";
            break;
          case '04':
            $mes = "Abril";
            break;
          case '05':
            $mes = "Mayo";
            break;
          case '06':
            $mes = "Junio";
            break;
          case '07':
            $mes = "Julio";
            break;
          case '08':
            $mes = "Agosto";
            break;
          case '09':
            $mes = "Septiembre";
            break;
          case '10':
            $mes = "Octubre";
            break;
          case '11':
            $mes = "Noviembre";
            break;
          case '12':
            $mes = "Diciembre";
            break;
        }
        $fechaFormateada = $fecha[0] . " de " . $mes . " del " . $fecha[2];
      ?>
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
          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- Tabla de la izquierda -->
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Detalles generales</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-hover">
                      <tbody>
                        <tr>
                          <td>Fecha de inserción:</td>
                          <td><?php echo $_POST['fecha']; ?></td>
                        </tr>
                        <tr>
                          <td>Centro:</td>
                          <td><?php echo $_POST['centro']; ?></td>
                        </tr>
                        <tr>
                          <td>Lugar:</td>
                          <td><?php echo $_POST['lugar'] ?></td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>

              <!-- Tabla de la derecha -->
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Detalles específicos</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-hover">
                      <tbody>
                        <tr>
                          <td>Servicio:</td>
                          <td><?php echo $_POST['servicio'] ?></td>
                        </tr>
                        <tr>
                          <td>Categoria:</td>
                          <td><?php echo $_POST['categoria']; ?></td>
                        </tr>
                        <tr>
                          <td>Descripción:</td>
                          <td><?php echo $_POST['descripcion']; ?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
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
