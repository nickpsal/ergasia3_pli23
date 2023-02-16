<?php
    class Signup{
        use Controller;
        public function index($data = []){
            $request = new Request();
            if ($request->is_post())  {
                show($_POST);
            }else if ($request->is_get()){
                $data['title'] = 'Εγγραφή Νέου Χρήστη';
                //get the menu items from database
                $menu = new Menu;
                $data['menu-items'] = $menu->find_all_data_from_db();
                $n = new Nomoi;
                $data['nomoi'] = $n->find_all_data_from_db();
                $k = new Kausimo;
                $data['kausima'] = $k->find_all_data_from_db();
                $d = new Dimos;
                $data['dimos'] = $d->find_all_data_from_db();
                $this->view('signup', $data); 
            }
        }
    }