<?php
    class Home {
        use Controller;
        public function index($data = []) {
            $data['title'] = 'Κεντρική Σελιδα';
            //get the menu items from database
            $menu = new Menu;
            $data['menu-items'] = $menu->find_all();
            $a = new Anakoinoseis;
            $data['anakoinoseis'] = $a->find_all();
            $this->view('home', $data); 
        }
    }