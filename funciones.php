<?php 
// MVC
function dameNombre($nombre,$ape){

    dameaApellido($ape);
    echo "<b>Hola {$nombre} padron soy profesor</b>";      

}

function dameaApellido($ape){
    
    echo "<b>Hola {$ape}</b>";      

}

function dameaEdad($edad){
    
    return 2021 - $edad;

}
