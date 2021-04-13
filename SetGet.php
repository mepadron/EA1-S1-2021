<?php
class Triceratops
{
    private $velocidad = 20;
    private $alimentacion = array("helechos", "eucaliptus", "musgo");
    public function getVelocidad()
    {
        return $this->velocidad;
    }
    public function setVelocidad($nueva_velocidad)
    {
        $this->velocidad = $nueva_velocidad;
    }
}

$mi_Triceratops = new Triceratops();
$mi_Triceratops->setVelocidad(56);
echo $mi_Triceratops->getVelocidad();
