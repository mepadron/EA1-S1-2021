<?php

class Personas {

    public $n = "lolo";

    public function __construct($nombre){
        echo 'Soy el constructor '. $nombre. " ".$this->n;
    }
    
    
    public function dameNombre($nombre){

        // dameaApellido($ape);
        return "Hola {$nombre} padron soy profesor";      
    
    }

    public function __destruct()
    {
        echo "se desttruye la class";
    }
}
// zmnzxmcnzmxcmzxm
