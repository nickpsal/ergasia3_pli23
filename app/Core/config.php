<?php
    //define the name of the app
    define("APP_NAME", "Get-Gas");
    //define the desc of the app
    define("APP_DESC", "Get-Gas app");
    //debug true or false
    define("DEBUG", true);
    //checking of if it is localhost or live server
    if ($_SERVER['SERVER_NAME'] == '127.0.0.1' or  $_SERVER['SERVER_NAME'] == 'localhost') {
        //localhost
        $host = $_SERVER['HTTP_HOST'];
        $folder = trim(dirname($_SERVER['PHP_SELF']), '/\\');
        $base_url = "http://$host/$folder";
        $parts = explode('/', $base_url);
        $path = implode('/', array_slice($parts, 0, count($parts) - 1));
        define('ROOT', $path . "/public");
        define('URL', $path . "/");
        define('DB_HOST', 'localhost');
        define('DB_USER', 'root');
        define('DB_PASS', 'toor');
        define('DB_NAME', 'psaltakis_nikolaos_ge3_db');
    }else {
        //live server
        define('ROOT', $_SERVER['HTTP_HOST'] . '/public');
        define('URL', $_SERVER['HTTP_HOST']);
        define('DB_HOST', 'localhost');
        define('DB_USER', 'root');
        define('DB_PASS', 'toor');
        define('DB_NAME', 'psaltakis_nikolaos_ge3_db');
    }
