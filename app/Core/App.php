<?php  
    class App{
        //initiate variables 
        private $controller = 'Home';
        private $method = 'index';
        //class constructor 
        public function __construct()
        {
            $url = $this->splitURL();
            // get the filenake of thw controller from the url
            //we split the url in array 
            //[0] is the contorller
            //[1] is the method
            $filename = "../app/Controllers/" . ucfirst($url[0]) . ".php";
            //check if the controller file exists
            if (file_exists($filename)){
                $this->controller = ucfirst($url[0]);
                //remove the controller from array
                unset($url[0]); 
                // require controller file
                require_once $filename;
            }else {
                // require the 404 controller file if controller dont exists
                $this->controller = "_404";
                require_once "../app/Controllers/_404.php";
            }
            $controller = new $this->controller;
            if (isset($url[1])) {
                //check if method exists
                if(method_exists($controller, $url[1])) {
                    $this->method = $url[1];
                    //remove the method from array
                    unset($url[1]);
                }
            }
            call_user_func_array([$controller, $this->method], [$url]);
        }

        //split url to arrays
        private function splitURL() {
            if (empty($_GET['url'])) {
                redirect('home');
            }else {
                $url = $_GET['url'];
                return (explode('/', filter_var(trim($url, "/"), FILTER_SANITIZE_URL)));
            }
        }
    }