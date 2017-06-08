<?php
    session_start();
    if(@$_COOKIE['rol']=="1"){
        header('Location: modules/Medicos/index.php');
    }
?>
<html>
    <head>
      <meta charset="utf-8">

        <!--<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>-->
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            /*body{
                width: 30%;
                margin: auto;
				        margin-top:5%;
            }
            #logo_vidosan{
                margin-left: 25%;
            }
            #boton_submit{
                width: 50%;
                margin: auto;
            }
            #img_logo{
                width: 150px;
            }*/
            #cabecera{
              margin-top: 1%;

            }
            body{
              background: linear-gradient(white,#3a87ad);
            }
            #img_logo{
              width: 150px;
            }
            .carousel-inner > .item > img,
            .carousel-inner > .item > a > img {
                width: 70%;
                margin: auto;
            }
        </style>
    </head>
    <body class="container-fluid">

      <!-- Cabecera -->
      <div class="row" id="cabecera">
        <div class="col-lg-2" id="logo_vidosan">
          <img src="images/paramedic.png" style="border-radius:20px;" id="img_logo">
        </div>
        <div id="form_login" class="col-lg-3 pull-right">
          <div class="row">
          <form class="form" method="POST" action="#">
            <div class="row">
                  <div class="col-lg-3 form-group">
                    <label><small>Usuario</small></label>
                  </div>
                  <div class="col-lg-7">
                      <input type="text" id="user" name="user" class="form-control" required>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-lg-3">
                      <label><small>Contraseña</small></label>
                    </div>
                  <div class="col-lg-7">
                      <input type="password" id="pass" name="pass" class="form-control" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-10">
                      <button id="boton_submit" name="submit_login" class="btn btn-info" style="width:100%;margin:2px;">Enviar</button>
                    </div>
                  </div>
          </form>
        </div>
        </div>
      </div>
      <!-- Fin cabecera -->

      <!-- Carousel -->
      <div class="row">
        <div class="col-lg-1"></div>
        <div id="myCarousel" class="carousel slide col-lg-10" data-ride="carousel" style="border:1px solid;">

          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>

          <div class="row" style="margin-top:0.5%;">
            <div class="col-lg-12" style="height:50%;">
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="images/addImage.png" alt="Chania" style="width:460px;height:345px;">
                </div>
                <div class="item">
                  <img src="images/paramedic.png" alt="Chania" style="width:460px;height:345px;">
                </div>
                <div class="item">
                  <img src="images/sort_asc.png" alt="Flower" style="width:460px;height:345px;">
                </div>
                <div class="item">
                  <img src="images/Refresh-button-icon.png" style="width:460px;height:345px;">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Fin carousel -->
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
                // Creamos una variable de sesion con el nombre del usuario y otra con los apellidos
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
                header('Location: modules/Clientes/production/index.php') or die("asd");
            }else{
                echo "El usuario no existe";
            }
        }
    ?>
</html>
