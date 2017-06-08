<?php

    include_once $_SERVER['DOCUMENT_ROOT']."Vidosan/BBDD/conexion.php";

    function listarCategoria(){
        $consulta = mysql_query("select * from categoria",connectbbdd()) or die ("Fallo en listar categoria");
        return $consulta;
    }
    function devolverCategoriaporId($valor){
        $consulta = mysql_query("SELECT tipo FROM categoria where id_categoria=$valor;",connectbbdd()) or die ("Fallo en listar categoria");
        $arry = mysql_fetch_array($consulta);
        return $arry['tipo'];
    }
    ?>
