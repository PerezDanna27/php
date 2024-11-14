<?php

$Papas = [
    "Margarita Pollo",
    "Margarita Limon",
    "Margarita BBQ",
    "Margarita Mayonesa"
];

$Papas2 = [
    "Margarita Pollo2",
    "Margarita Limon2",
    "Margarita BBQ2",
    "Margarita Mayonesa2"
];

$PapasMix = array_merge($Papas, $Papas2);
print_r($PapasMix);

array_push($Papas, "DeToditoMix");
$Papa = array_pop($Papas);

echo count($Papas);

print_r($Papas);

echo $Papa;

if(in_array("Margarita Limon", $Papas)){
    echo "existe";
}