<?php
    include_once $_SERVER['DOCUMENT_ROOT']."Vidosan/BBDD/conexion.php";

    function insertarTareas($obj){
        $consulta = mysql_query("INSERT INTO tareas ( descripcion, progreso,Medico_id_medico) VALUES ('$obj->descripcion', '$obj->progreso', '$obj->idMedico');
",connectbbdd()) or die ("Fallo en insertar Tareas");
        return $consulta;
    }
    function listarTareasMedicosporId($valor){
      $consulta = mysql_query("SELECT descripcion,progreso,fecha_inserccion,id_tareas from tareas where Medico_id_medico='$valor' order by progreso",connectbbdd()) or die ("Fallo en listar tareas medico por id");
      return $consulta;
    }
    function contarTareasSinEmpezar($val){
      $consulta = mysql_query("SELECT count(*) as cuenta FROM tareas where progreso='SIN EMPEZAR' and Medico_id_medico='$val'",connectbbdd()) or die ("Fallo en Contar Tareas");
      $arry =mysql_fetch_array($consulta);
      return $arry['cuenta'];
    }
    function actualizarTareas($idtarea,$valor,$idmedico){
      if($valor=="EN PROGRESO"){
        $consulta = mysql_query("UPDATE tareas SET progreso='$valor',fecha_comienzo=CURRENT_TIMESTAMP WHERE id_tareas='$idtarea' and Medico_id_medico='$idmedico'",connectbbdd()) or die ("Fallo en actualizar tareas medico por id");
      }else if($valor=="TERMINADO"){
        $consulta = mysql_query("UPDATE tareas SET progreso='$valor',fecha_finalizacion=CURRENT_TIMESTAMP WHERE id_tareas='$idtarea' and Medico_id_medico='$idmedico'",connectbbdd()) or die ("Fallo en actualizar tareas medico por id");
      }else{
      $consulta = mysql_query("UPDATE tareas SET progreso='$valor' WHERE id_tareas='$idtarea' and Medico_id_medico='$idmedico'",connectbbdd()) or die ("Fallo en actualizar tareas medico por id");
    }
      return $consulta;
    }
    function contarTareasporIdmedico($val){
      $consulta = mysql_query("SELECT count(*) as cuenta FROM tareas where Medico_id_Medico='$val'",connectbbdd()) or die ("Fallo en Contar Tareas");
      $arry =mysql_fetch_array($consulta);
      return $arry['cuenta'];
    }
    ?>
