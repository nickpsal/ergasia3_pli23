<?php
    class Login{
        use Controller;
        public function index($data = []){
            $data['title'] = 'Σύνδεση Χρήστη';
            //get the menu items from database
            $menu = new Menu;
            $data['menu-items'] = $menu->find_all_data_from_db();
            $this->view('login', $data); 
        }
    }