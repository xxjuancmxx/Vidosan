<?php
class Cliente{
    public $idCliente;
    public $userCliente;
    public $password;
    public $nombreCliente;
    public $apellidosCliente;
    public $telefonoCliente;
    public $email;
    public $provincia;
    public $municipio;
    
    
    

    public function __construct($userCliente,$password,$nombreCliente,$apellidosCliente,$telefonoCliente,$email,$provincia,$municipio,$idCliente=null){
      $this->userCliente=$userCliente;
      $this->password=$password;
      $this->nombreCliente=$nombreCliente;
      $this->apellidosCliente=$apellidosCliente;
      $this->telefonoCliente=$telefonoCliente;
      $this->email=$email;
      $this->provincia=$provincia;
      $this->municipio=$municipio;
      $this->idCliente=$idCliente;
    }
    public function __destruct(){
      return 0;
    }
    function getIdCliente() {
        return $this->idCliente;
    }

    function getUserCliente() {
        return $this->userCliente;
    }

    function getPassword() {
        return $this->password;
    }

    function getNombreCliente() {
        return $this->nombreCliente;
    }

    function getApellidosCliente() {
        return $this->apellidosCliente;
    }

    function getTelefonoCliente() {
        return $this->telefonoCliente;
    }

    function getEmail() {
        return $this->email;
    }

    function getProvincia() {
        return $this->provincia;
    }

    function getMunicipio() {
        return $this->municipio;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setUserCliente($userCliente) {
        $this->userCliente = $userCliente;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setNombreCliente($nombreCliente) {
        $this->nombreCliente = $nombreCliente;
    }

    function setApellidosCliente($apellidosCliente) {
        $this->apellidosCliente = $apellidosCliente;
    }

    function setTelefonoCliente($telefonoCliente) {
        $this->telefonoCliente = $telefonoCliente;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setProvincia($provincia) {
        $this->provincia = $provincia;
    }

    function setMunicipio($municipio) {
        $this->municipio = $municipio;
    }
    
}
?>