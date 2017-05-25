<?php
	session_start();
	include("../../../BBDD/conexion.php");

	$idCliente = $_SESSION['id'];
	$idMedico = $_POST['id'];
	$descripcion = $_POST['desc'];
	$fecha_insercion = $_POST['fecha_insercion'];
	$fecha_cita = $_POST['fecha_cita'];

	insertarCitaQuery($idCliente,$idMedico,$descripcion,$fecha_insercion,$fecha_cita);
?>