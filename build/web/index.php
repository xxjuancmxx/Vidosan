<?php
    if(@$_COOKIE['rol']=="1"){
        header('Location: Medicos/index.php');
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <link href="src/css/bootstrap.css" rel="stylesheet">
        <link href="src/css/bootstrap-theme.css" rel="stylesheet">
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
            <img src="src/images/paramedic.png" style="border-radius:20px;" id="img_logo">
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
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        include("BBDD/conexion.php");
        $consulta=buscarcliente($user,$conexion);
        $consulta1=buscarmedico($user,$conexion);
        $rowers_cliente=mysql_num_rows($consulta);
        $coluwers_cliente=mysql_num_fields($consulta);
        $rowers_medico=mysql_num_rows($consulta1);
        $coluwers_medico=mysql_num_fields($consulta1);
        echo "Numero de filas: ".$rowers_cliente."<br>";
        echo "Tabla 1:<br>";
        $arry_cliente =mysql_fetch_array($consulta);
        $arry_medico =mysql_fetch_array($consulta1);
        if($rowers_cliente>0){
          if($user==$arry_cliente['user_cliente'] && $pass==$arry_cliente['password'] && $arry_cliente['isDeleted']==0){
            echo "USUARIO Y CONTRA CORRECTOS";
            echo"<br>CLiente";
            }  
        }else if($rowers_medico>0){
            if($user==$arry_medico['user_medico'] && $pass==$arry_medico['password'] && $arry_medico['isDeleted']==0){
                echo "USUARIO Y CONTRA CORRECTOS";
                echo"<br>Medico";
                setcookie("user",$user);
                setcookie("pass",$pass);
                setcookie(rol,"1");
                header('Location: Medicos/index.php');
            }
        }else{
            echo "usuario no existe";
        }
        
      
        echo "<br>";
          
    }
    ?>
</html>