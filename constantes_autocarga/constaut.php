<?php

class Config {
    const VERSION = '1.0.0';
}

echo Config::VERSION;  // Muestra: 1.0.0

// Autocarga de clases usando spl_autoload_register
spl_autoload_register(function($className) {
    include $className . '.php';
});
?>