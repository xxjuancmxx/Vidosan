<?php
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
            include("BBDD/conexion.php");

            $user=$_POST['user'];
            $pass=$_POST['pass'];

            $consulta=buscarcliente($user,$conexion);
            $consulta1=buscarmedico($user,$conexion);

            //$rowers_cliente=mysql_num_rows($consulta);
            //$columns_cliente=mysql_num_fields($consulta);
            $rowers_medico=mysql_num_rows($consulta1);
            $columns_medico=mysql_num_fields($consulta1);

            if($rowers_medico>0){
                header('Location: modules/Medicos/index.php');
            }else{
                echo "El usuario no existe";
            }
        }
    ?>
</html>
