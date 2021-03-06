<?php
    session_start();
    if(@$_COOKIE['rol']=="1"){
        header('Location: modules/Medicos/index.php');
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <style>
            body{
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
            }
        </style>
    </head>
    <body>
        <div class="col-lg-12" id="logo_vidosan">
            <img src="images/paramedic.png" style="border-radius:20px;" id="img_logo">
        </div>
        <div class="col-lg-12">
            <form class="form" method="POST" action="#">
                <div class="col-lg-12">
                    <label>Usuario</label>
                    <input type="text" id="user" name="user" class="form-control" required>
    		</div>
    		<div class="col-lg-12">
                    <label>Contraseña</label>
                    <input type="password" id="pass" name="pass" class="form-control" required><br>
    		</div>
    		<div class="col-lg-12">
                    <button class="btn btn-block btn-primary" id="boton_submit" name="submit_login">Enviar</button>
                </div>
            </form>
        </div>
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
