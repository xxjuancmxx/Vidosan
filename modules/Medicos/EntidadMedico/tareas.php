<?php
class Tareas{
    public $descripcion;
    public $progreso;
    public $idMedico;

    public function __construct($descripcion,$progreso,$idMedico){
      $this->descripcion=$descripcion;
      $this->progreso=$progreso;
      $this->idMedico=$idMedico;
    }

    public function __destruct(){
      return 0;
    }
}
?>
