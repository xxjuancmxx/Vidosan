<?php
    session_start();

    if($_SESSION['rol']!="2"){
        header('Location: ../../../index.php');
    }

    include('../actions/eventosCalendario.php');
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vidosan - <?php echo $_SESSION['nombre_cliente'] ?></title>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <!-- FullCalendar -->
    <link href="../vendors/fullcalendar/dist/fullcalendar.css" rel="stylesheet">
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/fullcalendar/dist/fullcalendar.js"></script>
    <script src="../vendors/fullcalendar/dist/lang/es.js"></script>
    <style type="text/css">
        .fc-event{
            cursor: pointer;
        }
    </style>

    <!-- sweetalert-->
    <script src="../vendors/sweetalert2/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="../vendors/sweetalert2/sweetalert2.min.css">
    <!-- PopUp -->
    <script src="js/popups.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#calendario').fullCalendar({
                locale: 'es',
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay'
                },
                columnFormat: 'dddd',
                timeFormat: 'H(:mm)',
                navLinks: true,
                eventLimit: true,
                editable: false,
                events: [
                    <?php
                        for($i=0;$i<$rows;$i++){
                            if($i != $rows-1){
                    ?>
                            {
                                id: '<?php echo $citas[$i]['id'] ?>',
                                title: '<?php echo $citas[$i]['title'] ?>',
                                start: '<?php echo $citas[$i]['start'] ?>',
                                description: '<?php echo $citas[$i]['description'] ?>'
                            },
                    <?php
                            }else{
                    ?>
                            {
                                id: '<?php echo $citas[$i]['id'] ?>',
                                title: '<?php echo $citas[$i]['title'] ?>',
                                start: '<?php echo $citas[$i]['start'] ?>',
                                description: '<?php echo $citas[$i]['description'] ?>'
                            }
                    <?php
                            }
                        }
                    ?>
                ],
                eventMouseover: function(){
                    
                },
                eventClick: function(event) {
                    popUpEvento(event.title,event.description);
                }  
            }); // Fin calendario
            $('#calendario').fullCalendar('option', 'aspectRatio', 2.1);     
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
                        <h2>Calendario de <?php echo $_SESSION['nombre_cliente'] . " " . $_SESSION['apellidos'] ?></h2><br>
                        <div id="idPrueba"></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div id='calendario'></div>
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
