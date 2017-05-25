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

    <title>Administrator</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../css/plugins/morris.css" rel="stylesheet">

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
                                        <h5 class="media-heading">
                                            <strong>
                                                <?php
                                                    echo $_COOKIE['user'];
                                                ?>
                                            </strong>
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
                            <a href="#">Leer todas las citas..</a>
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
                            Médicos <small>Insertar Medico</small>
                        </h1>


                    </div>
                </div>
                <!-- /.row -->
                <div class="col-lg-12 col-md-12 col-xs-12"  id="divinsertar" >
                     <ol class="breadcrumb">
                          <li class="active">
                              <i class="fa fa-dashboard"></i> Insertar Médico
                          </li>
                      </ol>
                      <p class="alert alert-success" id="mensaje_suc" style="display:none">Médico insertado correctamente!</p>
                    <form  method="POST" class="form" onsubmit="return validarInsertarMedicos()" >
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                <label>Nombre</label>
                                <input type="text" name="nombmed" id="nombmed" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                 <label>Apellidos</label>
                                 <input type="text" name="apellmed" id="apellmed" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                <label>Usuario</label>
                                <input type="text" name="Usuario" id="Usuario" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                <label>Contraseña </label> <input type="checkbox" onclick="mostrarPass()" style="float: right;"><label style="float: right;font-size: 10px;margin-right: 2px;font-style: italic;">Mostrar contraseña</label>
                                <input type="password" name="contramed" id="contramed" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                <label>Teléfono de contacto</label>
                                <input type="text" name="telefonomed" id="telefonomed"  class="form-control" maxlength="9">
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                 <label>Email</label>
                                 <input type="text" name="mailmed" id="mailmed" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                <label>Provincia</label>
                                <input type="text" name="provmed"  class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                 <label>Municipio</label>
                                 <input type="text" name="munmed" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-xs-12">
                                <br>
                                <select name="cat" class="form-control">
                                <?php
                                include $_SERVER['DOCUMENT_ROOT']."Vidosan/modules/Medicos/EntidadMedico/categoria.php";
                                include $_SERVER['DOCUMENT_ROOT']."Vidosan/modules/Medicos/DaoMedico/DaoCategoria.php";
                                $consul=listarCategoria();
                                $rows=mysql_num_rows(listarCategoria());
                            for($i=0;$i<$rows;$i++){
                                  $arry = mysql_fetch_array($consul);
                                  echo "<option value=".$arry['id_categoria'].">".$arry['tipo']."</option>";
                                }
                                ?>
                              </select><br>
                                <input type="submit" name="insertmed" class="btn btn-success" >
                            </div>
                        </div>
                    </form>
                    <?php
                            if(isset($_POST['insertmed'])){
                                $nombre=$_POST['nombmed'];
                                $apellidos=$_POST['apellmed'];
                                $user=$_POST['Usuario'];
                                $pass=$_POST['contramed'];
                                $telefono=$_POST['telefonomed'];
                                $email=$_POST['mailmed'];
                                $provincia=$_POST['provmed'];
                                $municipio=$_POST['munmed'];
                                $idCategoria=$_POST['cat'];
                                include $_SERVER['DOCUMENT_ROOT']."Vidosan/modules/Medicos/EntidadMedico/medico.php";
                                include $_SERVER['DOCUMENT_ROOT']."Vidosan/modules/Medicos/DaoMedico/DaoMedico.php";
                                $objetix=new Medico($user,$pass,$nombre,$apellidos,$telefono,$email,$provincia,$municipio,$idCategoria);
                                insertarMedicos($objetix);
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
        function validarmail(){
            var expr=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var mail=document.getElementById('mailmed').value;
            return expr.test(mail);
        }
        function validarcontra(){
            var expr = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d$@$!%*?&]{6,15}/;
            var contra=document.getElementById('contramed').value;
            return expr.test(contra);
        }
        function validarInsertarMedicos(){
            var cont=0;
            if(!validarvacio("nombmed")){
                cont++;
                $("#nombmed").attr("style", "box-shadow:0px 0px 5px #DF0101");
            }else{
                $("#nombmed").attr("style", "box-shadow:0px 0px 0px #DF0101");
            }

            if(!validarvacio("apellmed")){
                cont++;
                $("#apellmed").attr("style", "box-shadow:0px 0px 5px #DF0101");
            }else{
                $("#apellmed").attr("style", "box-shadow:0px 0px 0px #DF0101");
            }
            if(!validarvacio("Usuario")){
                cont++;
                $("#Usuario").attr("style", "box-shadow:0px 0px 5px #DF0101");
            }else{
              $.ajax({
                  url: "../../CONTROLADORES/CONTROLADORverificarUsuario.php",
                  type:'post',
                  dataType: 'html',
                  data: $("#Usuario"),
                  success: function (data) {
                    if (data === "false") {
                      cont++;
                      $("#Usuario").attr("style", "box-shadow:0px 0px 5px #DF0101");
                    }else{
                       $("#Usuario").attr("style", "box-shadow:0px 0px 0px #DF0101");
                    }
                  }
              });
            }
            if(!validarcontra()){
                cont++;
                $("#contramed").attr("style", "box-shadow:0px 0px 5px #DF0101");
            }else{
                $("#contramed").attr("style", "box-shadow:0px 0px 0px #DF0101");
            }
            if(!validarmail()){
                cont++;
                $("#mailmed").attr("style", "box-shadow:0px 0px 5px #DF0101");
            }else{
                $("#mailmed").attr("style", "box-shadow:0px 0px 0px #DF0101");
            }
            if ($("#telefonomed").val() === "" && $("#telefonomed").val().length !== 9) {
                $("#telefonomed").attr("style", "box-shadow:0px 0px 5px #DF0101");
                cont++;
            } else {
               $("#telefonomed").attr("style", "box-shadow:0px 0px 0px #DF0101");
            }
            if(cont==0){
                $("#mensaje_suc").show().delay(2000);
                sacarmensaje();
                return true;
            }else{
                return false;
            }

        }

        function quitarmensaje(){
          $("#mensaje_suc").hide(200);
        }
        function sacarmensaje(){
          $("#mensaje_suc").show();
        }
        function mostrarPass() {
            var obj = document.getElementById('contramed');
            if(obj.type.valueOf()==="text"){
                obj.type = "password";
            }else{
                obj.type = "text";
            }
        }
    </script>
</body>
</html>
