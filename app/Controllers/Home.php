<?php
    class Home {
        use Controller;
        public function index($data = []) {
            $data['title'] = 'Κεντρική Σελιδα';
            //get the menu items from database
            $menu = new Menu;
            $data['menu-items'] = $menu->find_all_data_from_db();
            $a = new Anakoinoseis;
            $data['anakoinoseis'] = $a->find_all_data_from_db();
            $this->view('home', $data); 
        }
    }