<?php
class Medico{
    public $idCita;
    public $descripcion;
    public $fechainserccion;
    public $fechaalta;
    public $idCliente;
    public $idMedico;


    public function __construct($idCita,$descripcion,$fechainserccion,$fechaalta,$idCliente,$idMedico){
      $this->idCita=$idCita;
      $this->descripcion=$descripcion;
      $this->fechainserccion=$fechainserccion;
      $this->fechaalta=$fechaalta;
      $this->idCliente=$idCliente;
      $this->idMedico=$idMedico;
    }
    public function __destruct(){
      return 0;
    }
}
?>
