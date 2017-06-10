<?php
session_start();
if(@$_COOKIE['rol']=="1"){
	header('Location: modules/Medicos/index.php');
}
?>
<html>
<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <!-- CSS externos -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS ropios -->
    <link href="css/estilos-index.css" rel="stylesheet">
    <!-- JS externos -->
    <script src="js/jquery-3.2.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- JS propios -->
    <script type="text/javascript" src="js/index-controller.js"></script>
</head>
<body>
   <!-- Cabecera -->
   <div class="row" id="cabecera">
        <!-- Logo -->
        <div class="col-xs-2" id="logo_vidosan">
            <img src="images/logo.png" id="img_logo">
        </div>
        <!-- Fin logo -->
        <!-- Login -->
        <?php
            if(!isset($_COOKIE['rol']) && empty($_SESSION['rol'])){
                ?>
                    <div id="form_login" class="col-xs-2 pull-right">
                        <div class="row">
                            <form class="form" method="POST" action="#">
                                <div class="input-group login-component-margin"">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input type="text" id="user" name="user" class="form-control" placeholder="Usuario" required>
                                </div>
                                <div class="input-group login-component-margin">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input type="password" id="pass" name="pass" class="form-control" placeholder="Contraseña" required>                                        
                                </div>
                                <div class="row login-component-margin">
                                    <div class="col-lg-12">
                                        <button id="boton_submit" name="submit_login" class="btn btn-info" style="width:100%;">Entrar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php
            }else if(isset($_COOKIE['rol'])){
                ?>
                    <div class="col-xs-2 pull-right">
                        <table>
                            <tr>
                                <td>
                                    <h2>Bienvenido/a <?php echo $_COOKIE['user']; ?></h2>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <button id="volverMedico" class="btn btn-primary" onclick="volverPanel()">Panel de control</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                <?php
            }else if(!empty($_SESSION['rol'])){
                ?>
                    <div class="col-xs-2 pull-right">
                        <table>
                            <tr>
                                <td>
                                    <h3>Bienvenido/a <?php echo $_SESSION['nombre_cliente']; ?></h3>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <button id="volverCliente" class="btn btn-primary" onclick="volverPanel()">Panel de control</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                <?php
            }
        ?>
        <!-- Fin login -->
    </div>
    <!-- Barra de navegacion -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="nav">
                    <ul>
                        <li class="home"><a href="#">Conócenos</a></li>
                        <li class="tutorials"><a href="#">Nuestro centro</a></li>
                        <li class="about"><a href="#">Cuadro médico</a></li>
                        <li class="news"><a href="#">Cartera de servicios</a></li>
                        <li class="contact"><a href="#">Trabaja con nosotros</a></li>
                        <li class="contact"><a href="#">Sector privado</a></li>
                        <li class="contact"><a href="#">Sala de prensa</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin barra de navegacion -->
    <!-- Fin cabecera -->

    <!-- Carousel -->
    <div class="container">
        <div class="row" style="margin-top:1%;">
            <div class="col-xs-1"></div>
            <div id="myCarousel" class="carousel slide col-xs-10" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="images/Medicine.png" style="height: 460px;width:460px;">
                            </div>
                            <div class="item">
                                <img src="images/estetoscopio.png" style="height: 460px;width:460px;">
                            </div>
                            <div class="item">
                                <img src="images/enfermera-1.png" style="height: 460px;width:460px;">
                            </div>
                            <div class="item">
                                <img src="images/jeringa.png" style="height: 460px;width:460px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Fin carousel -->

    <!-- Noticias -->
    <div class="container">
        <div class="row">
            <div class="col-xs-4">
                <h2>Lorem ipsum</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                </p>
                <button class="btn btn-verMas">Más detalles</button>
            </div>
            <div class="col-xs-4">
                <h2>Lorem ipsum</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                </p>
                <button class="btn btn-verMas">Más detalles</button>
            </div>
            <div class="col-xs-4">
                <h2>Lorem ipsum</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                </p>
                <button class="btn btn-verMas">Más detalles</button>
            </div>
        </div>
        <div class="row" style="margin-top:1%;">
            <div class="col-xs-4">
                <h2>Lorem ipsum</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                </p>
                <button class="btn btn-verMas">Más detalles</button>
            </div>
            <div class="col-xs-4">
                <h2>Lorem ipsum</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                </p>
                <button class="btn btn-verMas">Más detalles</button>
            </div>
            <div class="col-xs-4">
                <h2>Lorem ipsum</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                </p>
                <button class="btn btn-verMas">Más detalles</button>
            </div>
        </div>
    </div>
    <!-- Fin noticias -->

    <!-- Footer -->
    <div class="copyright">
        <div class="container">
            <div class="col-md-6">
                <p>© 2017 - No copyright</p>
            </div>
            <div class="col-md-6">
                <ul class="bottom_ul">
                    <li><a href="#">Vidosan.com</a></li>
                    <li><a href="#">Sobre nosotros</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Faq's</a></li>
                    <li><a href="#">Contáctanos</a></li>
                    <li><a href="#">Mapa</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Fin footer -->
    </body>

    <?php
    if (isset($_POST['submit_login'])) {
        // Contiene la conexion y metodos para encontrar usuarios
    	include("BBDD/conexion.php");

    	$user=$_POST['user'];
    	$pass=$_POST['pass'];
    	
    	$consulta=buscarcliente($user,$pass);
    	$consulta1=buscarmedico($user,$conexion);

    	$rows_cliente=mysql_num_rows($consulta);
    	$rows_medico=mysql_num_rows($consulta1);

        if($rows_medico>0){
            header('Location: modules/Medicos/index.php');
            $medic = mysql_fetch_array($consulta1);
            setcookie("user",$user);
            setcookie("pass",$pass);
            setcookie("id",$medic['id_medico']);
            setcookie(rol,"1");
        }else if($rows_cliente>0){
            // Creamos un array con el cliente
            $client = mysql_fetch_array($consulta);
            // Creamos variables de sesion con los campos del usuario
            $_SESSION['id'] = $client['idCliente'];
            $_SESSION['nombre_cliente'] = $client['nombre_cliente'];
            $_SESSION['apellidos'] = $client['apellidos_cliente'];
            $_SESSION['tlf'] = $client['telefono_cliente'];
            $_SESSION['email'] = $client['email'];
            $_SESSION['provincia'] = $client['provincia'];
            $_SESSION['municipio'] = $client['municipio'];
            $_SESSION['rol'] = "2";

            // Redirigimos a la plantilla de cliente
            echo "<script type='text/javascript'>window.location = 'modules/Clientes/production/index.php';</script>";
        }else{
            echo "El usuario no existe";
        }
    }
    ?>
    </html>
