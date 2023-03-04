<?php   
    class _404{
        use Controller;
        public function index($data = []){
            $data['title'] = '404 Η Σελίδα που ζητήσατε δεν βρέθηκε';
            //παίρνουμε τα δεδομένα του πίνακα menu της βάσης δεδομένων
            $menu = new Menu;
            $data['menu-items'] = $menu->find_all_data_from_db();
            //δείχνουμε την view μαζι με τα δεδομένα
            $this->view('404', $data); 
        }
    }