<?php

$Nombres = ["Jesus", "Gustavo", "Jorge"];
$Gaseosa =[
    "Nombre" => "Manzana",
    "Azucar" => 4.08,
    "Pais" => "Colombia",
];
foreach($Gaseosa as $k => $v){
    echo $k." ".$v.";";
}