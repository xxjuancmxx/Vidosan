<!DOCTYPE html>
<html lang="en">
<?php
    if(@$_COOKIE['rol']!="1"){
        header('Location: /Vidosan/index.php');
    }
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="/Vidosan/modules/medicos/img/icon_pharmacy.png" />
    <title>Administrator</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Administrador</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                  <?php include $_SERVER['DOCUMENT_ROOT']."Vidosan/modules/Medicos/include/includeNotificaciones.php"; ?>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                      <?php include $_SERVER['DOCUMENT_ROOT']."Vidosan/modules/Medicos/include/includeCitas.php"; ?>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                        <?php
                            echo $_COOKIE['user'];
                        ?>
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="Formularios\FormMedicos\perfilMedico.php"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li>
                            <a href="/Vidosan/modules/Medicos/Formularios/FormTareas/misTareas.php"><i class="fa fa-fw fa-pencil"></i> Mis Tareas</a>
                        </li>
                        <li>
                            <a href="/Vidosan/modules/Medicos/Formularios/FormTareas/nuevasTareas.php"><i class="fa fa-fw fa-plus"></i> Añadir Tareas</a>
                        </li>

                        <li class="divider"></li>
                        <li>
                             <form method="POST">
                               <button class="btn btn-block btn-default " style="text-align: left;border:0px;margin-left: 10px;" name="cerrar_sesion"><i class="fa fa-fw fa-power-off" > Cerrar Sesión</i></button>
                                </form>
                                    <?php
                                          if(isset($_POST["cerrar_sesion"])){
                                              setcookie("rol", "", -1, "/Vidosan");
                                              header('Location: ../../index.php');
                                          }
                                    ?>


                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="/Vidosan/modules/Medicos/index.php"><i class="fa fa-fw fa-home"></i> Inicio</a>
                    </li>
                    <li>
                        <a href="/Vidosan/modules/Medicos/Formularios/FormClientes/tables.php"><i class="fa fa-fw fa-table"></i> Listado Pacientes</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-group"></i> Pacientes <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="/Vidosan/modules/Medicos/Formularios/FormClientes/insertarClientes.php">Crear/Modificar Pacientes</a>
                            </li>
                            <li>
                                <a href="/Vidosan/modules/Medicos/Formularios/FormClientes/eliminarClientes.php">Eliminar Pacientes</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-bolt"></i> Médicos <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="/Vidosan/modules/Medicos/Formularios/FormMedicos/insertarMedicos.php">Crear Médicos</a>
                            </li>
                            <li>
                                <a href="/Vidosan/modules/Medicos/Formularios/FormMedicos/editarMedicos.php">Modificar Médicos</a>
                            </li>
                            <li>
                                <a href="/Vidosan/modules/Medicos/Formularios/FormMedicos/eliminarMedicos.php">Dar de baja Médico</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/Vidosan/modules/Medicos/Formularios/FormCitas/misCitas.php"><i class="fa fa-fw fa-cubes"></i> Mis Citas</a>
                    </li>
                    <li>
                        <a href="/Vidosan/modules/Medicos/Formularios/FormCitas/aceptarCitas.php"><i class="fa fa-fw fa-check-square"></i> Aceptar Citas</a>
                    </li>
                    <li>
                        <a href="/Vidosan/modules/Medicos/Formularios/FormClientes/misPacientes.php"><i class="fa fa-fw fa-user-md"></i> Mis Pacientes</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Inicio <small>Estadísticas</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Inicio
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-pencil fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                          <?php
                                              include_once $_SERVER['DOCUMENT_ROOT']."Vidosan/modules/Medicos/DaoMedico/DaoTareas.php";
                                              echo contarTareasporIdmedico($_COOKIE['id']);
                                          ?>
                                        </div>
                                        <div>Mis Tareas</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer" onclick="enviarmistareas()">
                                    <span class="pull-left" onclick="enviarmistareas()">Ver Detalles</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right" onclick="enviarmistareas()"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user-md fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                          <?php
                                              include_once $_SERVER['DOCUMENT_ROOT']."Vidosan/modules/Medicos/DaoMedico/DaoCliente.php";
                                              echo contarPacientesporIdmedico($_COOKIE['id']);
                                          ?>
                                        </div>
                                        <div>Pacientes asignados</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer" onclick="enviarmispacientes()">
                                    <span class="pull-left" onclick="enviarmispacientes()">Ver Detalles</span>
                                    <span class="pull-right" ><i class="fa fa-arrow-circle-right" onclick="enviarmispacientes()"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-plus-square fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                          <?php
                                              include_once $_SERVER['DOCUMENT_ROOT']."Vidosan/modules/Medicos/DaoMedico/DaoCitas.php";
                                              echo contarCitas($_COOKIE['id']);
                                          ?>
                                        </div>
                                        <div>Mis Citas</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer" onclick="enviarcitas()">
                                    <span class="pull-left" onclick="enviarcitas()">Ver Detalles</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"  onclick="enviarcitas()"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-stethoscope fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                            <?php
                                                include_once $_SERVER['DOCUMENT_ROOT']."Vidosan/modules/Medicos/DaoMedico/DaoCliente.php";
                                                echo contarClientes();
                                            ?>
                                        </div>
                                        <div>Numero de Clientes</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer" onclick="enviartables()">
                                    <span class="pull-left" onclick="enviartables()">Ver Detalles</span>
                                            <span class="pull-right"><i class="fa fa-arrow-circle-right" name="enviar_tables" onclick="enviartables()">
                                       </i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->


                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script>
        function enviartables(){
            window.location.href = "Formularios/FormClientes/tables.php";
        }
        function enviarcitas(){
          window.location.href = "Formularios/FormCitas/misCitas.php";
        }
        function enviarmispacientes(){
          window.location.href = "Formularios/FormClientes/misPacientes.php";
        }
        function enviarmistareas(){
            window.location.href = "Formularios/FormTareas/misTareas.php";
        }
    </script>
</body>
</html>
