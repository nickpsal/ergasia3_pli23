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
        //gettinng current url with $_SERVER super global
        $current_url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        //break the url in array by / symbol
        $parts = explode('/', $current_url);
        //asembly the current url
        $abs_path = implode('/', array_slice($parts, 0, count($parts) - 1));
        define('ROOT', $abs_path . "/public");
        define('URL', $abs_path . "/");
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
