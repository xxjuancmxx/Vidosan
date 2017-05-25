<?php
  class Expediente{
    private $id_expediente;
    private $fecha_insercion;
    private $incidencias;

    function __construct($id,$fecha,$incidencias){
      $this->id_expediente = $id;
      $this->fecha_insercion = $fecha;
      $this->incidencias = $incidencias;
    }
    function __destruct(){
      return 0;
    }

    function getIdExpediente(){
      return $this->id_expediente;
    }
    function getFechaInsercion(){
      return $this->fecha_insercion;
    }
    function getIncidenciasTodas(){
      return $this->incidencias;
    }
    function getIncidenciaConcretaPorId($idIncidencia){
      foreach($this->incidencias as $incidenciaAux){
        if($incidenciaAux->getIdIncidencia == $idIncidencia){
          $incidencia = $incidenciaAux;
        }
      }
      return $incidencia;
    }
  }
?>
