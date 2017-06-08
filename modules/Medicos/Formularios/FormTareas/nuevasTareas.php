<!DOCTYPE html>
<?php
    if(@$_COOKIE['rol']!="1"){
        header('Location: ../index.php');
    }
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="img/icon_pharmacy.png" />
    <title>Administrator</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../css/plugins/morris.css" rel="stylesheet">

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
                    <li>
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
                                <a href="insertarMedicos.php">Crear Médicos</a>
                            </li>
                            <li>
                                <a href="editarMedicos.php">Modificar Médicos</a>
                            </li>
                            <li>
                                <a href="eliminarMedicos.php">Dar de baja Médico</a>
                            </li>
                        </ul>
                        <li>
                            <a href="../FormCitas/misCitas.php"><i class="fa fa-fw fa-cubes"></i> Mis Citas</a>
                        </li>
                        <li>
                            <a href="../FormCitas/aceptarCitas.php"><i class="fa fa-fw fa-check-square"></i> Aceptar Citas</a>
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
                            Tareas <small>Nueva Tarea</small>
                        </h1>


                    </div>
                </div>
                <!-- /.row -->
                <div class="col-lg-12 col-md-12 col-xs-12"  id="divinsertar" >
                     <ol class="breadcrumb">
                          <li class="active">
                              <i class="fa fa-dashboard"></i> Añadir Tarea
                          </li>
                      </ol>
                      <p class="alert alert-success" id="mensaje_suc" style="display:none">Médico insertado correctamente!</p>
                    <form  method="POST" class="form" onsubmit="return validarinsertarTareas()" >
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-xs-4">
                                <label>Descripcion</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-xs-8">
                                 <textarea class="form-control" rows="5" name="descripcion" id="descripcion" placeholder="Descripción de la tarea a realizar.." style="resize:none;"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-xs-4">
                              <label>Elegir Médico</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-xs-8">
                                <br>
                                <select name="an_medico" class="form-control">
                                <?php
                                include_once $_SERVER['DOCUMENT_ROOT']."Vidosan/modules/Medicos/DaoMedico/DaoMedico.php";
                                $consul=listarMedicos();
                                $rows=mysql_num_rows(listarMedicos());
                            for($i=0;$i<$rows;$i++){
                                  $arry = mysql_fetch_array($consul);
                                  echo "<option value=".$arry['id_medico'].">".$arry['nombre_medico']." ".$arry['apellidos_medico']."</option>";
                                }
                                ?>
                              </select><br>
                            </div>
                            <div class="col-lg-12 col-md-12 col-xs-12">
                              <input type="submit" name="insertmed" class="btn btn-success" style="float:right;">
                          </div>
                        </div>
                    </form>
                    <?php
                            if(isset($_POST['insertmed'])){
                                $descripcion=$_POST['descripcion'];
                                $idMedico=$_POST['an_medico'];
                                $progreso="SIN EMPEZAR";
                                include_once $_SERVER['DOCUMENT_ROOT']."Vidosan/modules/Medicos/EntidadMedico/tareas.php";
                                include_once $_SERVER['DOCUMENT_ROOT']."Vidosan/modules/Medicos/DaoMedico/DaoTareas.php";
                                $objetix=new Tareas($descripcion,$progreso,$idMedico);
                                insertarTareas($objetix);
                            }
                        ?>
             </div>

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->¡
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../../js/plugins/morris/raphael.min.js"></script>
    <script>
        function validarvacio(valor){
            var val=$("#"+valor).val();
            if(val == "" || val == null){
                return false;
            }else{
                return true;
            }
        }
        function validarinsertarTareas(){
            var cont=0;
            if(!validarvacio("descripcion")){
                cont++;
                $("#descripcion").attr("style", "box-shadow:0px 0px 5px #DF0101");
            }else{
                $("#descripcion").attr("style", "box-shadow:0px 0px 0px #DF0101");
            }
            if(cont==0){
                return true;
            }else{
              return false;
            }

        }
    </script>
</body>
</html>
