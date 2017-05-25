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
            <?php
              $incidenciasExpediente = $expediente->getIncidenciasTodas();
              $totalIncidencias = count($incidenciasExpediente);

              for($i = 0;$i < $totalIncidencias; $i++){
                $fecha = explode("-",$incidenciasExpediente[$i]->getFechaIncidencia());
                $fechaFormateada = $fecha[2] . "-" . $fecha[1] . "-" . $fecha[0];
                // Insertamos fila
                if($i%4==0){
                  ?>
                    <div class="top_tiles">
                  <?php
                }
                ?>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <div class="tile-stats" style="text-align:center;">
                    <!-- Primer nivel -->
                    <div class="count">
                      <?php echo $incidenciasExpediente[$i]->getServicio(); ?>
                    </div>
                    <!-- Segundo nivel -->
                    <h3>
                      <?php echo $incidenciasExpediente[$i]->getCategoria(); ?>
                    </h3>
                    <!-- Tercer nivel -->
                    <p>
                      <form action="detallesIncidencia.php" method="post">
                        <input type="hidden" name="categoria" value="<?php echo $incidenciasExpediente[$i]->getCategoria(); ?>">
                        <input type="hidden" name="descripcion" value="<?php echo $incidenciasExpediente[$i]->getDescripcion(); ?>">
                        <input type="hidden" name="fecha" value="<?php echo $fechaFormateada; ?>">
                        <input type="hidden" name="centro" value="<?php echo $incidenciasExpediente[$i]->getCentro(); ?>">
                        <input type="hidden" name="servicio" value="<?php echo $incidenciasExpediente[$i]->getServicio(); ?>">
                        <input type="hidden" name="lugar" value="<?php echo $incidenciasExpediente[$i]->getLugar(); ?>">
                        <input type="submit" value="Ver más detalles" class="btn btn-info">
                      </form>
                    </p>
                  </div>
                </div>
                <?php
                if($i%4==0){
                  ?>
                    </div>
                  <?php
                }
              }
            ?>
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
