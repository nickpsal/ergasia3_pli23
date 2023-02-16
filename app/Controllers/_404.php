<?php   
    class _404{
        use Controller;
        public function index($data = []){
            $data['title'] = '404 Η Σελίδα που ζητήσατε δεν βρέθηκε';
            //get the menu items from database
            $menu = new Menu;
            $data['menu-items'] = $menu->find_all_data_from_db();
            $this->view('404', $data); 
        }
    }