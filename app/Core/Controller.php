<?php
    trait Controller {
        //προβολή της view της σελίδας
        public function view($view, $data = []){
            //τοποθεσία του header
            $header = "../app/Views/includes/header.php";
            //ορισμος path της view
            $filename = "../app/Views/" . $view . ".view.php";
            //τοποθεσία footer 
            $footer = "../app/Views/includes/footer.php";
            //Κανουμε έλεγχο αν υπάρχιε το header και το φορτώνουμε
            if (file_exists($header)) {
                require $header;
            }else {
                echo "not found";
            }
            //Κανουμε έλεγχο αν υπάρχιε το view και το φορτώνουμε
            if (file_exists($filename)){
                require $filename;
            }else {
                require "../app/Views/404.view.php";
            }
            //Κανουμε έλεγχο αν υπάρχιε το footer και το φορτώνουμε
            if (file_exists($footer)) {
                require $footer;
            }else {
                echo "not found";
            }
        }

        public function view_with_out_header_footer($view, $data = []){
            //view filename
            $filename = "../app/Views/" . $view . ".view.php";
            //check if view exists and loaded it else loads the 404 view
            if (file_exists($filename)){
                require $filename;
            }else {
                require "../app/Views/404.view.php";
            }
        }
    }