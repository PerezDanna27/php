<?php
class Persona {
    public $nombre;

    public function greet() {
        return "Hola, mi nombre es  " . $this->nombre;
    }
}

$persona = new Person();
$persona->nombre = "Danita";
echo $persona->greet();
?>