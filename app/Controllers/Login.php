<?php
    class Login{
        use Controller;
        public function index($data = []){
            $request = new Request();
            $data['title'] = 'Σύνδεση Χρήστη';
            //get the menu items from database
            $menu = new Menu;
            $data['menu-items'] = $menu->find_all_data_from_db();
            if ($request->is_post()) {
                $data2['username_user'] = $_POST['username_user'];
                $user = new User;
                $res = $user->get_first_query_db($data2);
                if (!empty($res)) {
                    if ($request->get_value_post('username_user') === $res->username_user && password_verify($request->get_value_post('password_user'), $res->password_user)) {
                        $_SESSION['user_data'] = $res;
                        message('Εχετε συνδεθεί με επιτυχία! ' . $_SESSION['user_data']->username_user);
                        redirect('home');
                    }else if ($request->get_value_post('username_user') === $res->username_user && !password_verify($request->get_value_post('password_user'), $res->password_user)){
                        message('Λανθασμένος Κωδικός Χρήστη Παρακαλω Ξαναδοκιμάστε');
                        redirect('login');
                    }
                }else {
                    message('Δεν υπάρχει αύτο το όνομα Χρήστη');
                    redirect('register');
                }
            }else if ($request->is_get()) {
                if (empty($_SESSION['user_data'])) {
                    $this->view('login', $data); 
                }else {
                    message("Είστε ήδη συνδεμένοι");
                    redirect('home');
                }
            }
        }
    }