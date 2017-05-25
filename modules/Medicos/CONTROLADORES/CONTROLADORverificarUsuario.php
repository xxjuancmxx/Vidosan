<?php
    include $_SERVER['DOCUMENT_ROOT']."Vidosan/modules/Medicos/DaoMedico/DaoCliente.php";
    include $_SERVER['DOCUMENT_ROOT']."Vidosan/modules/Medicos/DaoMedico/DaoMedico.php";
    $valor=$_POST['Usuario'];
    $cont=0;
    if(buscarclienteporUsuario($valor)){
      $cont++;
    }
    if(buscarmedicoporUsuario($valor)){
      $cont++;
    }

    if($cont>0){
      echo "false";
    }else{
      echo "true";
    }
?>
