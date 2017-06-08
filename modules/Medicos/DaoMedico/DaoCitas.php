<?php
    include_once $_SERVER['DOCUMENT_ROOT']."Vidosan/BBDD/conexion.php";
    function contarCitas($valor){
        $consulta = mysql_query("select count(*) as cuentacitas from cita where Medico_id_medico=$valor",connectbbdd()) or die ("Fallo en Contar Citas");
        $arry_cliente =mysql_fetch_array($consulta);
        return $arry_cliente['cuentacitas'];
    }
    function listarCitasClienteporId($valor){
      $consulta = mysql_query("SELECT descripcion,fecha_cita,user_cliente,nombre_cliente,apellidos_cliente,telefono_cliente,email,provincia,municipio,id_cita FROM cita c inner join cliente cl where c.Cliente_idCliente=cl.idCliente and c.Medico_id_medico=$valor and c.status=2 and c.fecha_cita>current_date order by c.fecha_cita",connectbbdd()) or die ("Fallo en Contar Citas");
      return $consulta;
    }
    function listarCitasClienteporIdlimit($valor){
      $consulta = mysql_query("SELECT descripcion,fecha_cita,user_cliente,nombre_cliente,apellidos_cliente,telefono_cliente,email,provincia,municipio,id_cita FROM cita c inner join cliente cl where c.Cliente_idCliente=cl.idCliente and c.Medico_id_medico=$valor and c.status=2 and c.fecha_cita>current_date order by c.fecha_cita limit 3",connectbbdd()) or die ("Fallo en Contar Citas");
      return $consulta;
    }
    function listarCitasClienteporIdsinRespuesta($valor){
      $consulta = mysql_query("SELECT descripcion,fecha_cita,user_cliente,nombre_cliente,apellidos_cliente,telefono_cliente,email,provincia,municipio,id_cita FROM cita c inner join cliente cl where c.Cliente_idCliente=cl.idCliente and c.Medico_id_medico=$valor and c.status=0 and c.fecha_cita>current_date order by c.fecha_cita",connectbbdd()) or die ("Fallo en Contar Citas");
      return $consulta;
    }
    function aceptarCita($valor){
      $consulta = mysql_query("UPDATE cita SET status='2' WHERE id_cita=$valor",connectbbdd()) or die ("Fallo en Contar Citas");
      return $consulta;
    }
    function cancelarCita($valor){
      $consulta = mysql_query("UPDATE cita SET status='1' WHERE id_cita=$valor",connectbbdd()) or die ("Fallo en Contar Citas");
      return $consulta;
    }
    ?>
