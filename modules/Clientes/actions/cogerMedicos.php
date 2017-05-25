<?php
	include("../../../BBDD/conexion.php");
	
	$idCliente = $_POST['id'];
	$medicos = buscarMedicosCliente($idCliente);

    foreach ($medicos as $medico) {
    	echo "<option value='$medico[0]'>$medico[1]</option>";
    }
?>