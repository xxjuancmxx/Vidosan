<?php

    include_once $_SERVER['DOCUMENT_ROOT']."Vidosan/BBDD/conexion.php";

    function contarClientes(){
        $consulta = mysql_query("select count(*) as cuentaclientes from cliente",connectbbdd()) or die ("Fallo en Contar Clientes");
        $arry_cliente =mysql_fetch_array($consulta);
        return $arry_cliente['cuentaclientes'];
    }

    function insertarClientes($obj){
        $consulta = mysql_query("INSERT INTO cliente (user_cliente, password, nombre_cliente, apellidos_cliente, telefono_cliente, email, provincia, municipio) VALUES ('$obj->userCliente', '$obj->password', '$obj->nombreCliente', '$obj->apellidosCliente', '$obj->telefonoCliente', '$obj->email', '$obj->provincia', '$obj->municipio');
",connectbbdd()) or die ("Fallo en insertar Cliente");
        return $consulta;
    }
    function modificarCliente($obj,$valor){
        $consulta = mysql_query("UPDATE cliente SET user_cliente='$obj->userCliente',  nombre_cliente='$obj->nombreCliente', apellidos_cliente='$obj->apellidosCliente', telefono_cliente='$obj->telefonoCliente', email='$obj->email', provincia='$obj->provincia', municipio='$obj->municipio' WHERE idCliente='$valor'",connectbbdd()) or die ("Fallo en modificar Cliente");
        return $consulta;
    }
    function buscarclienteporUsuario($user){
         $consulta = mysql_query("select * from cliente where user_cliente='$user'") or die ("Fallo en en buscar cliente");
         $rowers=mysql_num_rows($consulta);
         $valor=false;
         if($rowers>0){
             $valor=true;
         }
         return $valor;
    }
    function existeCliente($valor){
        $consulta = mysql_query("SELECT * FROM cliente where telefono_cliente='$valor'",connectbbdd()) or die ("Fallo en insertar Cliente");
        $rowers=mysql_num_rows($consulta);
        $valor=false;
        if($rowers>0){
            $valor=true;
        }
        return $valor;
    }
    function sacarCliente($valor){
        $consulta = mysql_query("SELECT * FROM cliente where telefono_cliente='$valor'",connectbbdd()) or die ("Fallo en insertar Cliente");
        return $consulta;
    }
    function listarClientes(){
        $consulta = mysql_query("select * from cliente where isDeleted=0 order by apellidos_cliente",connectbbdd()) or die ("Fallo en Contar Clientes");
        return $consulta;
    }
    function listarClientesEliminados(){
        $consulta = mysql_query("select * from cliente where isDeleted=1 order by apellidos_cliente",connectbbdd()) or die ("Fallo en Contar Clientes");
        return $consulta;
    }
    function eliminarCliente($valor){
        $consulta = mysql_query("UPDATE cliente SET isDeleted=1 WHERE idCliente='$valor'",connectbbdd()) or die ("Fallo en eliminar Clientes");
        return $consulta;
    }
    function buscarPacientesporIdmedico($valor){
        $consulta = mysql_query("SELECT * FROM cliente_has_medico has inner join cliente c where has.Medico_id_medico = '$valor'",connectbbdd()) or die ("Fallo en buscar pacientes por IDMedico");
        return $consulta;
    }
    function contarPacientesporIdmedico($valor){
      $consulta = mysql_query("SELECT count(*) as cuentapacientes FROM cliente_has_medico has inner join cliente c where has.Medico_id_medico ='$valor'",connectbbdd()) or die ("Fallo en buscar pacientes por IDMedico");
      $arry_cliente =mysql_fetch_array($consulta);
      return $arry_cliente['cuentapacientes'];
    }
    ?>
