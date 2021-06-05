<?php
    session_start();
    require_once 'functions.php';

    spl_autoload_register(function($class){
        require_once $_SERVER['DOCUMENT_ROOT'].'/todoapp/class/'.$class.'.php';
    });
?>