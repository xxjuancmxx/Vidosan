<?php
  class Incidencia{
    private $id_incidencia;
    private $categoria;
    private $descripcion;
    private $fecha_incidencia;
    private $centro;
    private $servicio;
    private $lugar;

    function __construct($id,$categoria,$descripcion,$fecha,$centro,$servicio,$lugar){
      $this->id_incidencia = $id;
      $this->categoria = $categoria;
      $this->descripcion = $descripcion;
      $this->fecha_incidencia = $fecha;
      $this->centro = $centro;
      $this->servicio = $servicio;
      $this->lugar = $lugar;
    }
    function __destruct(){
      return 0;
    }

    function getIdIncidencia(){
      return $this->id_incidencia;
    }
    function getCategoria(){
      return $this->categoria;
    }
    function getDescripcion(){
      return $this->descripcion;
    }
    function getFechaIncidencia(){
      return $this->fecha_incidencia;
    }
    function getCentro(){
      return $this->centro;
    }
    function getServicio(){
      return $this->servicio;
    }
    function getLugar(){
      return $this->lugar;
    }
    function setCategoria($categoria){
      $this->categoria = $categoria;
    }
    function setDescripcion($descripcion){
      $this->descripcion = $descripcion;
    }
    function setFechaIncidencia($fecha){
      $this->fecha_incidencia = $fecha;
    }
    function setCentro($centro){
      $this->centro = $centro;
    }
    function setServicio($servicio){
      $this->servicio = $servicio;
    }
    function setLugar($lugar){
      $this->lugar = $lugar;
    }
  }
?>
