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
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Inicio</a>
                    </li>
                    <li>
                        <a href="tables.php"><i class="fa fa-fw fa-table"></i> Listado Pacientes</a>
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
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Pacientes <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="insertarClientes.php">Crear/Modificar Pacientes</a>
                            </li>
                            <li>
                                <a href="#">Eliminar Pacientes</a>
                            </li>
                        </ul>
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
                            Pacientes <small>Insertar/Modificar Pacientes</small>
                        </h1>
                        <button class="btn btn-primary" onclick="sacarinsertar()">Insertar</button>
                        <button class="btn btn-warning"  onclick="sacarmodificar()">Modificar</button><br><br>

                    </div>
                </div>
                <!-- /.row -->
                <div class="col-lg-12 col-md-12 col-xs-12"  id="divinsertar" style="display:none">
                     <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Insertar Paciente
                            </li>
                        </ol>
                    <form action="#" method="POST" class="form" onsubmit="return validarInsertarClientes()">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                <label>Nombre</label>
                                <input type="text" name="nombcli" id="nombcli" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                 <label>Apellidos</label>
                                 <input type="text" name="apellcli" id="apellcli" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                <label>Usuario</label>
                                <input type="text" name="Usuario" id="Usuario" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                <label>Contraseña </label> <input type="checkbox" onclick="mostrarPass()" style="float: right;"><label style="float: right;font-size: 10px;margin-right: 2px;font-style: italic;">Mostrar contraseña</label>
                                <input type="password" name="contracli" id="contracli" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                <label>Teléfono de contacto</label>
                                <input type="text" name="telefonocli" id="telefonocli"  class="form-control" maxlength="9">
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                 <label>Email</label>
                                 <input type="text" name="mailcli" id="mailcli" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                <label>Provincia</label>
                                <input type="text" name="provcli" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6">
                                 <label>Municipio</label>
                                 <input type="text" name="muncli" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-xs-12">
                                <br>
                                <input type="submit" name="insertcli" class="btn btn-success">
                            </div>
                        </div>
                    </form>
                    <?php
                            if(isset($_POST['insertcli'])){
                                $nombre=$_POST['nombcli'];
                                $apellidos=$_POST['apellcli'];
                                $user=$_POST['Usuario'];
                                $pass=$_POST['contracli'];
                                $telefono=$_POST['telefonocli'];
                                $email=$_POST['mailcli'];
                                $provincia=$_POST['provcli'];
                                $municipio=$_POST['muncli'];
                                include $_SERVER['DOCUMENT_ROOT']."Vidosan/modules/Medicos/EntidadMedico/cliente.php";
                                include $_SERVER['DOCUMENT_ROOT']."Vidosan/modules/Medicos/DaoMedico/DaoCliente.php";
                                $objeto=new Cliente($user,$pass,$nombre,$apellidos,$telefono,$email,$provincia,$municipio);
                                insertarClientes($objeto);
                            }
                        ?>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12"  id="divmodificar" style="display:none">
                    <form class="form"  method="POST" id="form_buscar" onsubmit="return false;">
                        <div class="col-lg-3 col-md-3 cols-xs-3">
                            <label style="font-size: 16px;">Buscar por Núm. de Teléfono:</label>
                        </div>
                        <div class="col-lg-3 col-md-3 cols-xs-3">
                            <input type="text" name="num_buscar" id="num_buscar" maxlength="9" class="form-control">
                        </div>
                        <div class="col-lg-6 col-md-6 cols-xs-6">
                            <button type="button" name="buscarnum" class="btn btn-success btn-primary" onclick="buscarnumero()">Enviar</button>
                            <br><br>
                        </div>
                    </form>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12"  id="divmodificar1">
<?php
                  if(isset($_POST['modificarcli'])){
                     $nombremod=$_POST['nombmodcli'];
                     $apellidosmod=$_POST['apellmodcli'];
                     $usermod=$_POST['usermodcli'];
                     $passmod="s";
                     $telefonomod=$_POST['telefonomodcli'];
                     $emailmod=$_POST['mailmodcli'];
                     $provinciamod=$_POST['provmodcli'];
                     $municipiomod=$_POST['munmodcli'];
                     $idCliente=$_POST['idCliente'];
                     include $_SERVER['DOCUMENT_ROOT']."Vidosan/web/Medicos/EntidadMedico/cliente.php";
                     include $_SERVER['DOCUMENT_ROOT']."Vidosan/web/Medicos/DaoMedico/DaoCliente.php";
                     $objeto1=new Cliente($usermod,$passmod,$nombremod,$apellidosmod,$telefonomod,$emailmod,$provinciamod,$municipiomod);
                     modificarCliente($objeto1,$idCliente);
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
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script>
        function sacarinsertar(){
            $("#divinsertar").toggle();
            $("#divmodificar").hide();
            $("#divmodificar1").hide();
        }
        function mostrarPass() {
            var obj = document.getElementById('contracli');
            if(obj.type.valueOf()==="text"){
                obj.type = "password";
            }else{
                obj.type = "text";
            }
        }
        function sacarmodificar(){
            $("#divmodificar").toggle();
            $("#divinsertar").hide();
            $("#divmodificar1").hide();
        }
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
            var mail=document.getElementById('mailcli').value;
            return expr.test(mail);
        }
        function validarcontra(){
            var expr = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d$@$!%*?&]{6,15}/;
            var contra=document.getElementById('contracli').value;
            return expr.test(contra);
        }
        function validarInsertarClientes(){
            var cont=0;
            if(!validarvacio("nombcli")){
                cont++;
                $("#nombcli").attr("style", "box-shadow:0px 0px 5px #DF0101");
            }else{
                $("#nombcli").attr("style", "box-shadow:0px 0px 0px #DF0101");
            }

            if(!validarvacio("apellcli")){
                cont++;
                $("#apellcli").attr("style", "box-shadow:0px 0px 5px #DF0101");
            }else{
                $("#apellcli").attr("style", "box-shadow:0px 0px 0px #DF0101");
            }
            if(!validarvacio("Usuario")){
                cont++;
                $("#Usuario").attr("style", "box-shadow:0px 0px 5px #DF0101");
            }else{
                $("#Usuario").attr("style", "box-shadow:0px 0px 0px #DF0101");
            }
            if(!validarcontra()){
                cont++;
                $("#contracli").attr("style", "box-shadow:0px 0px 5px #DF0101");
            }else{
                $("#contracli").attr("style", "box-shadow:0px 0px 0px #DF0101");
            }
            if(!validarmail()){
                cont++;
                $("#mailcli").attr("style", "box-shadow:0px 0px 5px #DF0101");
            }else{
                $("#mailcli").attr("style", "box-shadow:0px 0px 0px #DF0101");
            }
            if ($("#telefonocli").val() === "" && $("#telefonocli").val().length !== 9) {
                $("#telefonocli").attr("style", "box-shadow:0px 0px 5px #DF0101");
                cont++;
            } else {
               $("#telefonocli").attr("style", "box-shadow:0px 0px 0px #DF0101");
            }

            if(cont==0){
                return true;
            }else{
                return false;
            }

        }
        function buscarnumero(){

            $.ajax({
                url: "Formularios/editarCliente.php",
                type:'post',
                data: $("#form_buscar").serialize(),
                success: function (data) {
                    $("#divmodificar1").html(data);
                }
            });

           $("#divmodificar").show();
           $("#divmodificar1").show();
        }

    </script>
</body>
</html>
