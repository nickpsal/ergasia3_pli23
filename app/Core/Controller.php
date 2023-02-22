<?php
    trait Controller {
        // show the view file
        public function view($view, $data = []){
            //header location
            $header = "../app/Views/includes/header.php";
            //view filename
            $filename = "../app/Views/" . $view . ".view.php";
            //footer location
            $footer = "../app/Views/includes/footer.php";
            //check if header file exists and loaded it
            if (file_exists($header)) {
                require_once $header;
            }else {
                echo "dont found";
            }
            //check if view exists and loaded it else loads the 404 view
            if (file_exists($filename)){
                require_once $filename;
            }else {
                require_once "../app/Views/404.view.php";
            }
            //check if the footer file exists
            if (file_exists($footer)) {
                require $footer;
            }else {
                echo "dont found";
            }
        }
    }