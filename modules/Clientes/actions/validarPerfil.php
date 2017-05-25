<?php
  session_start();
  include("../../../BBDD/conexion.php");

  $nombre = $_POST['nombrePerfil'];
  $apellidos = $_POST['apellidosPerfil'];
  $tlf = $_POST['tlfPerfil'];
  $email = $_POST['emailPerfil'];
  $provincia = $_POST['provinciaPerfil'];
  $municipio = $_POST['municipioPerfil'];

  $datosCorrectos = true;
  if(!preg_match("/(^[A-Z])([a-z]+)$/",$nombre)){
    $datosCorrectos = false;
  }
  if(!preg_match("/(^[A-Z])([a-z]+)(\s)([A-Z])([a-z]+)$/",$apellidos)){
    $datosCorrectos = false;
  }
  if(!preg_match("/(^[0-9]{9})$/",$tlf)){
    $datosCorrectos = false;
  }
  if(!preg_match("/(^[a-z]+)([._\-]?([a-z0-9]*)?)@([a-z]+)([.]([a-z]{2,3}))$/",$email)){
    $datosCorrectos = false;
  }
  if(!preg_match("/(^[A-Z])([a-z]+)$/",$provincia)){
    $datosCorrectos = false;
  }
  if(!preg_match("/(^[A-Z])([a-z]+)$/",$municipio)){
    $datosCorrectos = false;
  }

  if($datosCorrectos){
    $_SESSION['nombre_cliente'] = $nombre;
    $_SESSION['apellidos'] = $apellidos;
    $_SESSION['tlf'] = $tlf;
    $_SESSION['email'] = $email;
    $_SESSION['provincia'] = $provincia;
    $_SESSION['municipio'] = $municipio;

    actualizarPerfil($nombre,$apellidos,$tlf,$email,$provincia,$municipio);
  }else{
    echo "error";
  }
?>
