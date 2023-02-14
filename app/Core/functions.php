<?php
    //show array with pre formating
    function show($stuff)
    {
        echo "<pre>";
        print_r($stuff);
        echo "</pre>";
    }

    function esc($str) {
        return htmlspecialchars($str);
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
    function message(string $msg = null, bool $clear = false){
        $ses = new Core\Session();
        if(!empty($msg)){
            $ses->set('message',$msg);
        }else {
            if(!empty($ses->get('message'))){
                $msg = $ses->get('message');
                if($clear){
                $ses->pop('message');
                }
                return $msg;
            }
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

    /** returns a user readable date format 
     * converts 2023-10-28 to 28th octomber 2023 **/
    function get_date($date){
        return date("jS M, Y",strtotime($date));
    }