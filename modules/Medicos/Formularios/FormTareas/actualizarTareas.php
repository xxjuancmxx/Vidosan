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
    <title>Administrador</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="../../js/sweetalert2/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="../../js/sweetalert2/sweetalert2.min.css">
    <script src="../../js/popups.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
        background-color: #F0EEFE;
        }
    </style>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Pacientes registrados</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../../index.php"> Administrador</a>
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
                          <a href="/Vidosan/modules/Medicos/Formularios\FormMedicos\perfilMedico.php"><i class="fa fa-fw fa-user"></i> Perfil</a>
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
                    <li >
                        <a href="../../index.php"><i class="fa fa-fw fa-home"></i> Inicio</a>
                    </li>
                    <li>
                        <a href="../FormClientes/tables.php"><i class="fa fa-fw fa-table"></i> Listado Pacientes</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-group"></i> Pacientes <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="../FormClientes/insertarClientes.php">Crear/Modificar Pacientes</a>
                            </li>
                            <li>
                                <a href="../FormClientes/eliminarClientes.php">Eliminar Pacientes</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-bolt"></i> Médicos <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="../FormMedicos/insertarMedicos.php">Crear Médicos</a>
                            </li>
                            <li>
                                <a href="../FormMedicos/editarMedicos.php">Modificar Médicos</a>
                            </li>
                            <li>
                                <a href="../FormMedicos/eliminarMedicos.php">Dar de baja Médico</a>
                            </li>
                        </ul>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-cubes"></i> Mis Citas</a>
                        </li>
                        <li>
                            <a href="aceptarCitas.php"><i class="fa fa-fw fa-check-square"></i> Aceptar Citas</a>
                        </li>
                        <li>
                            <a href="../FormClientes/misPacientes.php"><i class="fa fa-fw fa-user-md"></i> Mis Pacientes</a>
                        </li>
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
                           Actualizar Tareas
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="../../index.php">Inicio</a>
                            </li>
                            <li>
                                <i class="fa fa-pencil"></i> <a href="misTareas.php">Mis Tareas</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-pencil-square-o"></i> Actualizar Tareas
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12" id="tab_pacientes" >
                        <?php
                        include_once $_SERVER['DOCUMENT_ROOT']."Vidosan/modules/Medicos/DaoMedico/DaoTareas.php";
                         $consul=listarTareasMedicosporId($_COOKIE['id']);
                         $rowers=mysql_num_rows($consul);
                         $coluwers=mysql_num_fields($consul);
                        if($rowers>0){
                            ?>
                        <table class="table">
                            <tr style="font-weight: 700;font-size: 18px;">
                                <td>Descripcion</td>
                                <td>Estado</td>
                            </tr>
                        <?php
                            for($i=0;$i<$rowers;$i++){
                              $arry =mysql_fetch_array($consul);
                              echo "<tr><td><textarea class='form-control' style='resize:none;' readonly>".$arry['descripcion']."</textarea></td>";
                              echo "<td>";
                              ?>
                              <form class="form" method="post" >
                                <div class="col-lg-6">
                                  <input type="hidden" value="<?php echo $arry['id_tareas'] ?>" name="idtar">
                                  <select class="form-control" name="prog" >
                                    <option value="SIN EMPEZAR" <?php if($arry['progreso']=="SIN EMPEZAR")echo "selected";?>>SIN EMPEZAR</option>
                                    <option value="EN PROGRESO"<?php if($arry['progreso']=="EN PROGRESO")echo "selected";?>>EN PROGRESO</option>
                                    <option value="TERMINADO" <?php if($arry['progreso']=="TERMINADO")echo "selected";?>>TERMINADO</option>
                                  </select>
                                </div>
                                <div class="col-lg-6">
                                <input type="submit" value="Cambiar" class="btn btn-block btn-info" name="btn_actualizar" onclick="msg()">
                                  </div>
                              </form>
                              <?php
                              echo "</td>";
                              echo "</tr>";
                            }
                            ?>
                            </table>
                            <?php
                            if(isset($_POST['btn_actualizar'])){
                              $idtarea=$_POST['idtar'];
                              $progres=$_POST['prog'];
                              $idmedico=$_COOKIE['id'];
                              include_once $_SERVER['DOCUMENT_ROOT']."Vidosan/modules/Medicos/DaoMedico/DaoTareas.php";
                              actualizarTareas($idtarea,$progres,$idmedico);
                              sleep(3);
                              header('Location: actualizarTareas.php');
                            }
                        }else{
                          ?>
                          <div class="alert alert-warning">No tienes tareas por ahora..</div>
                          <?php
                        }

                        ?>
                    </div>
                <!-- /.row -->


                <!-- /.row -->


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
<script>
    $("#tab_pacientes").show(400);
    function msg(){
      popUpActualizarTarea();
    }
</script>
</html>
