<?php
    include_once $_SERVER['DOCUMENT_ROOT']."Vidosan/BBDD/conexion.php";
    function listarProvincias(){
      $consulta = mysql_query("SELECT * FROM provincias",connectbbdd()) or die ("Fallo en Contar Citas");
      return $consulta;
    }
    function listarMunicipios(){

    }

    }
    ?>
