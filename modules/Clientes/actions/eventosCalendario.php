<?php
	include("../../../BBDD/conexion.php");

	$citasQuery = buscarCitas($_SESSION['id']);

	$iterator = 0;
	foreach ($citasQuery as $cita) {
		$citas[$iterator]['id'] = $cita['id_cita'];

		$auxFecha = explode("-",$cita['fecha_cita']);
		$citas[$iterator]['start'] = $cita['fecha_cita'];
		$citas[$iterator]['fechaFormateada'] = $auxFecha[2] . "-" . $auxFecha[1] . "-" . $auxFecha[0];

		$citas[$iterator]['title'] = "Cita del " . $citas[$iterator]['fechaFormateada'];
		$citas[$iterator]['description'] = $cita['descripcion'];

		$citas[$iterator]['status'] = $cita['status'];

		$iterator++;
	}

	$rows = count($citasQuery);
?>