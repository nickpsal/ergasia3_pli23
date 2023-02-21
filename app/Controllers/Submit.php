<?php
    class Submit{
        use Controller;
        public function index($data = []){
            $data['title'] = 'Καταχώρηση';
            //get the menu items from database
            $menu = new Menu;
            $data['menu-items'] = $menu->find_all_data_from_db();
            if (!empty($_SESSION['user_data'] && $_SESSION['user_data']->role_user === '2')){
                message("Ο διαχειρηστής δεν έχει δικαιώματα να κάνει Νέα Καταχώρηση");
                redirect('home');
            }else if (!empty($_SESSION['user_data']) && $_SESSION['user_data']->role_user === '1'){
                $this->view('submit', $data); 
            }else {
                message("Θα πρέπει να κάνετε εγγραφή αν δεν έχετε λογαριασμό ή να συνδεθείτε για να κάνετε Νέα Καταχώρηση");
                redirect('login');
            }
        }
    }