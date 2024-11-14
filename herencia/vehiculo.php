<?php

class Vehiculo {
    public $marca;

    public function arrancar() {
        return "El vehículo está arrancando";
    }
}

class Auto extends Vehiculo {
    public $modelo;

    public function mostrarModelo() {
        return "El modelo del auto es " . $this->modelo;
    }
}

$miAuto = new Auto();
$miAuto->modelo = "Sedan";
echo $miAuto->mostrarModelo();
?>