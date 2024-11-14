<?php
$mes = "Enero";

switch($mes){
    case "Enero":
    case "Febrero":
    case "Dicicembre":   
        echo " es invierno";
        break;
    case "Marzo":
    case "Abril":
    case "Mayo":
        echo " es primavera";
        break;
    case "Junio":
    case "Julio":
    case "Agosto":
        echo " es verano";
        break;
    case "Septiembre":
    case "Octubre":
    case "Noviembre":
        echo "es otoño";
        break;
default:
echo "Dato invalido";
}