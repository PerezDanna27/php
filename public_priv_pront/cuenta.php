<?php

class Cuenta {
    public $titular;// Público
    private $saldo;// Privado
    protected $tipo;// Protegido

    public function __construct($titular, $saldo) {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function verSaldo() {
        return $this->saldo;
    }
}

$cuenta = new Cuenta("Danna", 200000);
echo $cuenta->verSaldo(); 
?>