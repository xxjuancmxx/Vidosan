<?php
class Medico{
    public $idMedico;
    public $userMedico;
    public $password;
    public $nombreMedico;
    public $apellidosMedico;
    public $telefonoMedico;
    public $email;
    public $provincia;
    public $municipio;
    public $idCategoria;

    public function __construct($userMedico,$password,$nombreMedico,$apellidosMedico,$telefonoMedico,$email,$provincia,$municipio,$idCategoria,$idMedico=null){
      $this->userMedico=$userMedico;
      $this->password=$password;
      $this->nombreMedico=$nombreMedico;
      $this->apellidosMedico=$apellidosMedico;
      $this->telefonoMedico=$telefonoMedico;
      $this->email=$email;
      $this->provincia=$provincia;
      $this->municipio=$municipio;
      $this->idCategoria=$idCategoria;
      $this->idMedico=$idMedico;
    }
    
    public function __destruct(){
      return 0;
    }
    function getIdMedico() {
        return $this->idMedico;
    }

    function getUserMedico() {
        return $this->userMedico;
    }

    function getPassword() {
        return $this->password;
    }

    function getNombreMedico() {
        return $this->nombreMedico;
    }

    function getApellidosMedico() {
        return $this->apellidosMedico;
    }

    function getTelefonoMedico() {
        return $this->telefonoMedico;
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
    function getidCategoria(){
      return $this->idCategoria;
    }
    function setIdMedico($idMedico) {
        $this->idMedico = $idMedico;
    }

    function setUserMedico($userMedico) {
        $this->userMedico = $userMedico;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setNombreMedico($nombreMedico) {
        $this->nombreMedico = $nombreMedico;
    }

    function setApellidosMedico($apellidosMedico) {
        $this->apellidosMedico = $apellidosMedico;
    }

    function setTelefonoMedico($telefonoMedico) {
        $this->telefonoMedico = $telefonoMedico;
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
    function setidCategoria($idCategoria){
        $this->idCategoria = $idCategoria;
    }

}
?>
