<?php

    include $_SERVER['DOCUMENT_ROOT']."Vidosan/BBDD/conexion.php";

    function listarCategoria(){
        $consulta = mysql_query("select * from categoria",connectbbdd()) or die ("Fallo en listar categoria");
        return $consulta;
    }
    ?>
