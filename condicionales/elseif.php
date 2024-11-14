<?php

$edad    = 80;

if($edad == 18){
    echo "Eres mayor de edad";
}elseif($edad > 18 && $edad <80){
    echo "Eres mayor a 18";
}elseif($edad >= 80){    
    echo "Eres una persona de tercera edad";
}else{
    echo "Eres menor de edad";
}