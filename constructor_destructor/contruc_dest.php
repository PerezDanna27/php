<?php

class Animal {
    public $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function __destruct() {
        echo "Destruyendo objeto: " . $this->nombre;
    }
}

$gato = new Animal("Guepardo");

?>