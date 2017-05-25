<?php
class Categoria{
    public $idCategoria;
    public $tipo;
    public $especialidad;

    public function __construct($idCategoria,$tipo,$especialidad){
      $this->idCategoria=$idCategoria;
      $this->tipo=$tipo;
      $this->especialidad=$especialidad;
    }
    public function __destruct(){
      return 0;
    }


}
?>
