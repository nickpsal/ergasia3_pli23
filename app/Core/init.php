<?php
    //required php files
    require_once "functions.php";
    require_once "config.php";
    require_once "request.php";
    require_once "Database.php";
    require_once "Model.php";
    require_once "Controller.php";
    require_once "App.php";
    // auyoload model files
    spl_autoload_register(function($classname) {
        //$classname = explode("\\", $classname);
        //$classname = end($classname);
        require_once "../app/Models/" . ucfirst($classname) . ".php";
    });