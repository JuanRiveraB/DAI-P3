<?php

class persona{
    
    private $persona_id;
    private $nombre;
    private $apellido;
    private $fecha_nacimiento;
    
    function __construct() {
        
    }
    
    function getPersona_id() {
        return $this->persona_id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getFecha_nacimiento() {
        return $this->fecha_nacimiento;
    }

    function setPersona_id($persona_id) {
        $this->persona_id = $persona_id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setFecha_nacimiento($fecha_nacimiento) {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }



    
}

