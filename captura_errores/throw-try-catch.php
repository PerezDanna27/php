<?php
$numero = -1;

function verificarPositivo($numero) {
    if ($numero < 0) {
        throw new Exception("El número no puede ser negativo");
    }
    return "El número es positivo";
}

try {
    echo verificarPositivo(-5);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage(); 
}