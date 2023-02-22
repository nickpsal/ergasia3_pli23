<?php
    //show array with pre formating
    function show($stuff)
    {
        echo "<pre>";
        print_r($stuff);
        echo "</pre>";
    }

    //redirect function
    function redirect($page) {
        header("Location: " . URL . $page);
        die();
    }

    //check if m is the current page
    function check_if_current_page($m) {
        $current_page = basename($_SERVER['REQUEST_URI']);
        if ($current_page == $m) {
            return true;
        }
        return false;
    }

    //show message only once
    function message($msg = '',$erase = false){
        if(!empty($msg)){
            $_SESSION['message'] = $msg;
        }else if(!empty($_SESSION['message'])){
            $msg = $_SESSION['message'];
            if($erase){
                unset($_SESSION['message']);
            }
            return $msg;
        }
        return false;
    }

    // for input field
    function old_value(string $key, mixed $default = "", string $mode = 'post'):mixed{
        $POST = ($mode == 'post') ? $_POST : $_GET;
        if(isset($POST[$key])){
            return $POST[$key];
        }
        return $default;
    }

    // for select field
    function old_select(string $key, mixed $value, mixed $default = "", string $mode = 'post'):mixed{
        $POST = ($mode == 'post') ? $_POST : $_GET;
        if(isset($POST[$key])){
            if($POST[$key] == $value)
            {
            return " selected ";
            }
        }else
        if($default == $value){
            return " selected ";
        }
        return "";
    }

    /** get current day and current date 
     * Translates the name of the day from english to greek **/
    function get_day_and_date(){
        $english_days = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
        $greek_days = array('Κυριακή', 'Δευτέρα', 'Τρίτη', 'Τεττάρτη', 'Πέμπτη', 'Παρασκευή', 'Σάββατο');
        $current_day = str_replace($english_days, $greek_days, date('l'));
        return $current_day . ", " . date("d/m/Y");
    }

    function get_date() {
        return date("Y/m/d");
    }