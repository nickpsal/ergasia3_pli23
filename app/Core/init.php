<?php
    //required php files
    require "functions.php";
    require "config.php";
    require "request.php";
    require "Database.php";
    require "Model.php";
    require "Controller.php";
    require "App.php";
    // auyoload model files
    spl_autoload_register(function($classname) {
        //$classname = explode("\\", $classname);
        //$classname = end($classname);
        require "../app/Models/" . ucfirst($classname) . ".php";
    });