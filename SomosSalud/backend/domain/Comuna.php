<?php
/**
 * Description of Comuna
 *
 * @author " "
 */
class Comuna {
   
    private $comunaID;
    private $comunaNombre;
    private $comunaProvincia;
    
    
    function __construct() {        
    }
    
    function getComunaID() {
        return $this->comunaID;
    }

    function getComunaNombre() {
        return $this->comunaNombre;
    }

    function getComunaProvincia() {
        return $this->comunaProvincia;
    }

    function setComunaID($comunaID) {
        $this->comunaID = $comunaID;
    }

    function setComunaNombre($comunaNombre) {
        $this->comunaNombre = $comunaNombre;
    }

    function setComunaProvincia($comunaProvincia) {
        $this->comunaProvincia = $comunaProvincia;
    }
}
