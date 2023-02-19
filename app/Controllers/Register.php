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
                $register = new User;
                if ($register->validate_register() === true) {
                    $register->insert_data_to_db($_POST);
                    message("Η Επιχείρηση γράφτηκε με επιτυχία");
                    redirect('login');
                }else {
                    message("Υπάεχει ήδη Επιχείρηση με αυτό το ΑΦΜ. Παρακαλώ επικοινωνήστε με τον διαχειρηστή");
                    redirect('home');
                }
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