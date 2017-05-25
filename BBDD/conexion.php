<?php
  // Para evitar el mensaje de deprecado
  error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);
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

function actualizarPerfil($nombre,$apellidos,$tlf,$email,$provincia,$municipio){
    $fecha_mod = date("Y-m-d");
    $consulta = mysql_query("update cliente set nombre_cliente='$nombre', apellidos_cliente='$apellidos', telefono_cliente='$tlf', email='$email', provincia='$provincia', municipio='$municipio', fecha_modificacion='$fecha_mod'");
  }

  function buscarExpediente($id){
    $consulta = mysql_query("select * from expediente where id_expediente='$id'");
    $expediente = mysql_fetch_array($consulta);
    return $expediente;
  }

  function buscarIncidencias($id){
    $consulta = mysql_query("select * from incidencia where Expediente_id_expediente='$id' order by fecha_incidencia DESC");
    $rows = mysql_num_rows($consulta);
    $incidencias = array();
    for($i = 0;$i < $rows; $i++){
      $incidencia = mysql_fetch_array($consulta);
      $incidencias[$i] = $incidencia;
    }
    return $incidencias;
  }

  function buscarMedicosCliente($idCliente){
    $idsMedicos = array();
    $medicos = array();

    $consulta1 = mysql_query("select Medico_id_medico from cliente_has_medico where Cliente_idCliente='$idCliente'");
    $rows = mysql_num_rows($consulta1);

    // Obtenemos todos los medicos que tiene el cliente
    for($i=0;$i<$rows;$i++){
      $aux = mysql_fetch_array($consulta1);
      $idsMedicos[$i] = $aux['Medico_id_medico'];
    }

    // Obtenemos los nombres de los medicos
    foreach($idsMedicos as $id){
      $consulta2 = mysql_query("select nombre_medico from medico where id_medico='$id'");
      $aux = mysql_fetch_array($consulta2);

      $medicos[] = array($id,$aux['nombre_medico']);
    }

    return $medicos;
    
  }

  function insertarCitaQuery($idCliente,$idMedico,$descripcion,$fecha_insercion,$fecha_cita){
    mysql_query("insert into cita(Cliente_idCliente,descripcion,fecha_insercion,fecha_cita,Medico_id_medico) values('$idCliente','$descripcion','$fecha_insercion','$fecha_cita','$idMedico')");
  }

  function buscarCitas($id){
    $consulta1 = mysql_query("select * from cita where Cliente_idCliente='$id'");
    $rows = mysql_num_rows($consulta1);

    for($i=0;$i<$rows;$i++){
      $aux = mysql_fetch_array($consulta1);
      $citas[] = $aux;
    }
    return $citas;
  }
?>
