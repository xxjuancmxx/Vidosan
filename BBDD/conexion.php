<?php
  //$servidor="localhost";
  $servidor = "127.0.0.1";
  $usuario="root";
  $clave="";
  $conexion=mysql_connect($servidor,$usuario,$clave) or die ("fallo");
  mysql_select_db('vidosan') or die ("<br>Error con la conexion de base de datos");
  function connectbbdd(){
       $servidor="localhost";
       $usuario="root";
       $clave="";
       $conexion=mysql_connect($servidor,$usuario,$clave) or die ("fallo");
       mysql_select_db('vidosan') or die ("Error con la conexion de base de datos");
       return $conexion;
   }
  function buscarcliente($user,$pass){
       $consulta = mysql_query("select * from cliente where user_cliente='$user' and password='$pass'") or die ("Fallo en Consulta");
       return $consulta;
  }
  function buscarmedico($user,$conexion){
       $consulta = mysql_query("select * from medico where user_medico='$user'",$conexion) or die ("Fallo en Consulta");
       return $consulta;
  }
?>
