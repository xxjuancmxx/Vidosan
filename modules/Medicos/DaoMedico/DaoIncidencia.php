<?php
    include_once $_SERVER['DOCUMENT_ROOT']."Vidosan/BBDD/conexion.php";
    function listarIncidenciaporId($valor){
      $consulta = mysql_query("SELECT * FROM incidencia where Expediente_id_expediente ='$valor' order by fecha_incidencia;",connectbbdd()) or die ("Fallo en Contar Citas");
      return $consulta;
    }
    ?>
