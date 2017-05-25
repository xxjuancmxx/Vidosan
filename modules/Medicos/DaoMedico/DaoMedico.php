<?php
    include_once $_SERVER['DOCUMENT_ROOT']."Vidosan/BBDD/conexion.php";


    function insertarMedicos($obj){
        $consulta = mysql_query("INSERT INTO medico (user_medico, password, nombre_medico, apellidos_medico, telefono_medico, email, provincia, municipio, idCategoria) VALUES ('$obj->userMedico', '$obj->password', '$obj->nombreMedico', '$obj->apellidosMedico', '$obj->telefonoMedico', '$obj->email', '$obj->provincia', '$obj->municipio', '$obj->idCategoria');
",connectbbdd()) or die ("Fallo en insertar Medicos");
        return $consulta;
    }
    function listarMedicos(){
        $consulta = mysql_query("select * from medico where isDeleted=0 order by apellidos_medico",connectbbdd()) or die ("Fallo en Listar medicos");
        return $consulta;
    }
    function eliminarMedico($valor){
        $consulta = mysql_query("UPDATE medico SET isDeleted=1 WHERE id_Medico='$valor'",connectbbdd()) or die ("Fallo en eliminar Medico");
        return $consulta;
    }
    function existeMedico($valor){
        $consulta = mysql_query("SELECT * FROM medico where telefono_medico='$valor'",connectbbdd()) or die ("Fallo en ver si existe Medico");
        $rowers=mysql_num_rows($consulta);
        $valor=false;
        if($rowers>0){
            $valor=true;
        }
        return $valor;
    }
    function buscarmedicoporUsuario($user){
         $consulta = mysql_query("select * from medico where user_medico='$user'") or die ("Fallo en en buscar medico");
         $rowers=mysql_num_rows($consulta);
         $valor=false;
         if($rowers>0){
             $valor=true;
         }
         return $valor;
    }
    function sacarMedico($valor){
        $consulta = mysql_query("SELECT * FROM medico where telefono_medico='$valor'",connectbbdd()) or die ("Fallo en sacar medico");
        return $consulta;
    }
    function modificarMedico($obj,$valor){
        $consulta = mysql_query("UPDATE medico SET user_medico='$obj->userMedico',  nombre_medico='$obj->nombreMedico', apellidos_medico='$obj->apellidosMedico', telefono_medico='$obj->telefonoMedico', email='$obj->email', provincia='$obj->provincia', municipio='$obj->municipio' WHERE id_medico='$valor'",connectbbdd()) or die ("Fallo en modificar Medico");
        return $consulta;
    }
    function sacarMedicoporId($valor){
      $consulta = mysql_query("SELECT * FROM medico where id_medico='$valor'",connectbbdd()) or die ("Fallo en sacar medico");
      return $consulta;
    }
    ?>
