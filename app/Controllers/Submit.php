<?php
    class Submit{
        use Controller;
        public function index($data = []){
            $data['title'] = 'Καταχώρηση';
            //get the menu items from database
            $menu = new Menu;
            $data['menu-items'] = $menu->find_all_data_from_db();
            $n = new Nomoi;
            $data['nomoi'] = $n->find_all_data_from_db();
            $k = new Kausimo;
            $data['kausima'] = $k->find_all_data_from_db();
            $d = new Dimos;
            $data['dimos'] = $d->find_all_data_from_db();
            $this->view('submit', $data); 
        }
    }