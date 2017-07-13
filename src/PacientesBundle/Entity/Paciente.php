<?php 

namespace PacientesBundle\Entity;

class Paciente{
    
    private $nombre;
    private $apellidos;
    private $dni;
    private $direccion;
    private $email;
    private $numeroTelefono;
    private $fechaNacimiento;
    private $sexo;
    private $embarazada;
    
    
    public function getNombre(){
        return $this->nombre;
    }
    
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    
    public function getApellidos(){
        return $this->apellidos;    
    }
    
    public function setApellidos($apellidos){
        $this->apellidos=$apellidos;
    }
    
    public function getDni(){
       return $this->dni;
    }
    
    public function setDni($dni){
        $this->dni = $dni;
    }
    
    
    public function getDireccion(){
        return $this->direccion;
    }
    
    public function setDireccion($direccion){
        $this->direccion=$direccion;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function setEmail($email){
        $this->email=$email;
    }
    
    public function getNumeroTelefono(){
        return $this->numeroTelefono;
    }
    
    public function setNumeroTelefono($numeroTelefono){
        $this->numeroTelefono=$numeroTelefono;
    }
    
    public function getFechaNacimiento(){
        return $this->fechaNacimiento;
    }
    
    public function setFechaNacimeinto($fechaNacimiento){
        $this->fechaNacimiento=$fechaNacimiento;
    }
    
    public function getSexo(){
        return $this->sexo;
    }
    
    public function setSexo($sexo){
        $this->sexo=$sexo;
    }
    
    public function isEmbarazada(){
        return $this->embarazada;
    }
    
    public function setEmbarazada($embarazada){
        $this->embarazada=$embarazada;
    }
}