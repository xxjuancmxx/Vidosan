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

    <link rel="shortcut icon" type="image/x-icon" href="/Vidosan/modules/medicos/img/icon_pharmacy.png" />
    <title>Administrator</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



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
                                            header('Location: ../index.php');
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
                    <li class="active">
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
 <!--                    <li>
                        <a href="blank-page.php"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>-->

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
                            Medicos <small>Dar de baja Medicos</small>
                        </h1>


                    </div>
                </div>
                <!-- /.row -->
                <div class="col-lg-12 col-md-12 col-xs-12"  id="diveliminar">
                  <?php
                  include $_SERVER['DOCUMENT_ROOT']."Vidosan/modules/Medicos/DaoMedico/DaoMedico.php";
                  include_once $_SERVER['DOCUMENT_ROOT']."Vidosan/modules/Medicos/DaoMedico/DaoCategoria.php";
                  $consul=listarMedicos();
                  $rowers=mysql_num_rows($consul);
                  $coluwers=mysql_num_fields($consul);
                  if($rowers>0){
                      ?>
                  <table class="table table-bordered">
                      <tr style="font-weight: 700;font-size: 18px;">
                          <td style="width:4%;"></td>
                          <td>Apellidos</td>
                          <td>Nombre</td>
                          <td>Telefono</td>
                          <td>Email</td>
                          <td>Categoria</td>
                      </tr>
                  <?php
                      for($i=0;$i<$rowers;$i++){
                        $arry =mysql_fetch_array($consul);
                        echo "<tr><td>";
                          ?>
                            <form action="#" method="post" onsubmit="return confirm('dar de baja al medico?')">
                              <input type="hidden" name="id_elimcliente" value="<?php echo $arry['id_medico']; ?>">
                              <button class="btn btn-danger btn-xs glyphicon glyphicon-remove" name="removemedic"></button>
                            </form>
                          <?php

                        echo"</td>";
                        echo "<td>".$arry['apellidos_medico']."</td>";
                        echo "<td>".$arry['nombre_medico']."</td>";
                        echo "<td>".$arry['telefono_medico']."</td>";
                        echo "<td>".$arry['telefono_medico']."</td>";
                        echo "<td>".devolverCategoriaporId($arry['idCategoria'])."</td></tr>";
                      }
                      if(isset($_POST['removemedic'])){
                        $idMedico=$_POST['id_elimcliente'];
                        eliminarMedico($idMedico);
                        header('Location: #');
                      }
                      ?>
                      </table>
                      <?php

                  }else{

                  }

                  ?>
                </div>

             </div>

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->¡
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../js/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.0/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.0/jquery-confirm.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

    <script>
  //   function dar_baja(){
  //     $.confirm({
  //     title: 'Dar De baja!',
  //     content: '¿Quiere dar de baja al médico?',
  //     animationSpeed: 600,
  //     buttons: {
  //         Si: function(){
  //           var cont=1;
  //           return cont;
  //         },
  //         No: function() {
  //         }
  //       }
  //   })
  //   $.alert("h");
  //   return false;
  // }

    </script>
</body>
</html>
