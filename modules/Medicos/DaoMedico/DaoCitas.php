<?php
    include_once $_SERVER['DOCUMENT_ROOT']."Vidosan/BBDD/conexion.php";
    function contarCitas($valor){
        $consulta = mysql_query("select count(*) as cuentacitas from cita where Medico_id_medico=$valor",connectbbdd()) or die ("Fallo en Contar Citas");
        $arry_cliente =mysql_fetch_array($consulta);
        return $arry_cliente['cuentacitas'];
    }
    function listarCitasClienteporId($valor){
      $consulta = mysql_query("SELECT descripcion,fecha_cita,user_cliente,nombre_cliente,apellidos_cliente,telefono_cliente,email,provincia,municipio FROM cita c inner join cliente cl where c.Cliente_idCliente=cl.idCliente and c.Medico_id_medico=$valor order by c.fecha_cita",connectbbdd()) or die ("Fallo en Contar Citas");
      return $consulta;
    }
    ?>
