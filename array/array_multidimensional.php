<?php

$Personas = [
    [
        "Nombre" => "Daniela",
        "Apellido" => "Morales",
        "Edad" => 29,
    ],
    [
        "Nombre" => "Sarah",
        "Apellido" => "Mendoza",
        "Edad" => 13,
    ]
];
foreach($Personas as $Personas){
    foreach($Personas as $key => $value){
        echo $key.": ".$value."<br>";
    }
}