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

    <title>Perfil</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                <a class="navbar-brand" href="../../index.php">Administrador</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
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
                            <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                             <form method="POST">
                               <button class="btn btn-block btn-default " style="text-align: left;border:0px;margin-left: 10px;" name="cerrar_sesion"><i class="fa fa-fw fa-power-off" > Cerrar Sesión</i></button>
                                </form>
                                    <?php
                                          if(isset($_POST["cerrar_sesion"])){
                                              setcookie("rol", "", -1, "/Vidosan");
                                              header('Location: /Vidosan/index.php');
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
                      <a href="../../index.php"><i class="fa fa-fw fa-home"></i> Inicio</a>
                  </li>
                  <li>
                      <a href="../FormClientes/tables.php"><i class="fa fa-fw fa-table"></i> Listado Pacientes</a>
                  </li>
<!--                    <li>
                      <a href="forms.php"><i class="fa fa-fw fa-edit"></i> Forms</a>
                  </li>
                  <li>
                      <a href="bootstrap-elements.php"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                  </li>
                  <li>
                      <a href="bootstrap-grid.php"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                  </li>-->
                  <li>
                      <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-group"></i> Pacientes <i class="fa fa-fw fa-caret-down"></i></a>
                      <ul id="demo" class="collapse">
                          <li>
                              <a href="../FormClientes/insertarClientes.php">Crear/Modificar Pacientes</a>
                          </li>
                          <li>
                              <a href="#">Eliminar Pacientes</a>
                          </li>
                      </ul>
                  </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-bolt"></i> Médicos <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="Formularios/FormMedicos/insertarMedicos.php">Crear/Modificar Médicos</a>
                            </li>
                            <li>
                                <a href="Formularios/FormMedicos/eliminarMedicos.php">Dar de baja Médico</a>
                            </li>
                        </ul>
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
                            Forms
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="../../index.php">Inicio</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Perfil de <?php echo $_COOKIE['user']?>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-6">

                        <form role="form">
                          <?php
                              include $_SERVER['DOCUMENT_ROOT']."Vidosan/modules/Medicos/DaoMedico/DaoMedico.php";
                              $consul=sacarMedicoporId($_COOKIE['id']);
                              $rowers=mysql_num_rows($consul);
                              $coluwers=mysql_num_fields($consul);
                              $arry =mysql_fetch_array($consul);
                           ?>
                            <div class="form-group">
                                  <h1>Perfil</h1>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                <label>Usuario:</label>
                                <p><?php echo $arry['user_medico'];?></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                <label>Apellidos:</label>
                                <p><?php echo $arry['nombre_medico'];?></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                <label>Nombre:</label>
                                <p><?php echo $arry['apellidos_medico'];?></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                <label>Telefono:</label>
                                <p><?php echo $arry['telefono_medico'];?></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                <label>Email:</label>
                                <p><?php echo $arry['email'];?></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                <label>Provincia</label>
                                <p><?php echo $arry['provincia'];?></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                <label>Municipio:</label>
                                <p><?php echo $arry['municipio'];?></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6">
                              <label>Fecha de alta:</label>
                              <p><?php echo $arry['fecha_alta'];?></p>
                            </div>

                        </form>

                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-6">
                        <h1>Pacientes Atendido</h1>

                        <form role="form">

                            <fieldset disabled>

                                <div class="form-group">
                                    <label for="disabledSelect">Disabled input</label>
                                    <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="disabledSelect">Disabled select menu</label>
                                    <select id="disabledSelect" class="form-control">
                                        <option>Disabled select</option>
                                    </select>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">Disabled Checkbox
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-primary">Disabled Button</button>

                            </fieldset>

                        </form>

                        <h1>Form Validation</h1>

                        <form role="form">

                            <div class="form-group has-success">
                                <label class="control-label" for="inputSuccess">Input with success</label>
                                <input type="text" class="form-control" id="inputSuccess">
                            </div>

                            <div class="form-group has-warning">
                                <label class="control-label" for="inputWarning">Input with warning</label>
                                <input type="text" class="form-control" id="inputWarning">
                            </div>

                            <div class="form-group has-error">
                                <label class="control-label" for="inputError">Input with error</label>
                                <input type="text" class="form-control" id="inputError">
                            </div>

                        </form>

                        <h1>Input Groups</h1>

                        <form role="form">

                            <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>

                            <div class="form-group input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>

                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-eur"></i></span>
                                <input type="text" class="form-control" placeholder="Font Awesome Icon">
                            </div>

                            <div class="form-group input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>

                            <div class="form-group input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span>
                            </div>

                        </form>

                        <p>For complete documentation, please visit <a href="http://getbootstrap.com/css/#forms">Bootstrap's Form Documentation</a>.</p>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

</body>

</html>
