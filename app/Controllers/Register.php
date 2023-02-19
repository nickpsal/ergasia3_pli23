<?php
    class Register{
        use Controller;
        public function index($data = []){
            $request = new Request();
            $data['title'] = 'Εγγραφή Νέου Χρήστη';
            //get the menu items from database
            $menu = new Menu;
            $data['menu-items'] = $menu->find_all_data_from_db();
            if ($request->is_post())  {
                show($_POST);
                $register = new User;
                $register->insert_data_to_db($_POST);
                redirect('login');
            }else if ($request->is_get()){
                $n = new Nomoi;
                $data['nomoi'] = $n->find_all_data_from_db();
                $k = new Kausimo;
                $data['kausima'] = $k->find_all_data_from_db();
                $d = new Dimos;
                $data['dimos'] = $d->find_all_data_from_db();
                $this->view('register', $data); 
            }
        }
    }