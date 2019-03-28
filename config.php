<?php

spl_autoload_register(function($class_name){

    $arquivo = "class" .DIRECTORY_SEPARATOR. $class_name . '.php';


    if (file_exists($arquivo)){
        require_once($arquivo);
    }
})

?>