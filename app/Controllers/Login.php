<?php
    class Login{
        use Controller;
        public function index($data = []){
            $request = new Request();
            $data['title'] = 'Σύνδεση Χρήστη';
            //get the menu items from database
            //αρχικοποίηση μοντέλου βάσης
            $menu = new Menu;
            //παίρνουμε τα δεδομένα απο την Βάση δεδομένων του μοντελου
            $data['menu-items'] = $menu->find_all_data_from_db();
            //ελεγχος αν είναι απο post
            if ($request->is_post()) {
                //παίρνουμε τα δεδομένα που ήρθαν απο post
                $data2['username_user'] = $_POST['username_user'];
                //αρχικοποίηση μοντέλου βάσης
                $user = new User;
                //παίρνουμε τα δεδομένα απο την Βάση δεδομένων του μοντελου
                $res = $user->get_first_query_db($data2);
                //έλεγχος άν έχουν έρθει δεδομένα ή είναι κενή η λίστα
                if (!empty($res)) {
                    //έπαλήθευση των στοιχείων που πάτησε ο χρήστης με αυτά της Βάσης Δεδομένων
                    if ($request->get_value_post('username_user') === $res->username_user && password_verify($request->get_value_post('password_user'), $res->password_user)) {
                        // αφαιρουμε απο την λίστα τον κωδικο του χρήστη
                        unset($res->password_user);
                        //αρχικοποιούμε την super global μεταβλητή $_SESSION με τα δεδομένα του χρήστη
                        $_SESSION['user_data'] = $res;
                        //μηνυμα επιτυχίας σύνδεσης και redirection στην αρχική σελίδα
                        message('Εχετε συνδεθεί με επιτυχία! ' . $_SESSION['user_data']->username_user);
                        redirect('home');
                    }else if ($request->get_value_post('username_user') === $res->username_user && !password_verify($request->get_value_post('password_user'), $res->password_user)){
                        //μηνυμα αποτυχίας εσφαλμένος κωδικός
                        message('Λανθασμένος Κωδικός Χρήστη Παρακαλω Ξαναδοκιμάστε');
                        redirect('login');
                    }
                }else {
                    //μηνυμα αποτυχίας δεν υπάρχει αυτός ο χρήστης
                    message('Δεν υπάρχει αύτο το όνομα Χρήστη');
                    redirect('register');
                }
            //ελεγχος αν είναι απο get
            }else if ($request->is_get()) {
                //δρομολόγηση στην σελίδα σύνδεσης login
                if (empty($_SESSION['user_data'])) {
                    $this->view('login', $data); 
                }else {
                    //Είναι ήδη συδνεμένος Κανουμε redirection στην αρχική
                    message("Είστε ήδη συνδεμένοι");
                    redirect('home');
                }
            }
        }
    }