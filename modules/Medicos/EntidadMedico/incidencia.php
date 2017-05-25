<?php
class Incidencia{
    public $idIncidencia;
    public $descripcion;
    public $fecha;
    public $idExpediente;

    public function __construct($idIncidencia,$descripcion,$fecha,$idExpediente){
      $this->idIncidencia=$idIncidencia;
      $this->descripcion=$descripcion;
      $this->fecha=$fecha;
      $this->idExpediente=$idExpediente;
    }

    public function __destruct(){
      return 0;
    }

}
?>
