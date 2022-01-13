<?php

if($_SERVER["REQUEST_METHOD"] == "OPTIONS") exit();

spl_autoload_register(function($class){
    if(file_exists('../app/classes/'.$class.'.php')){
        require_once('../app/classes/'.$class.'.php');
    }
    else if(file_exists('../Controllers/'.$class.'.php')){
        require_once('../Controllers/'.$class.'.php');
    }
    
});
require_once('Routes.php');
