<?php
    class Announcements{
        use Controller;
        //λίστα με όλες τις ανακοινώσεις
        public function index($data = []){
            $request = new Request;
            //αρχικοποίηση του μοντέλου βάσης Anakoinoseis
            $a = new Anakoinoseis;
            //ελεγχος αν είναι απο get  
            if ($request->is_get()) {
                //τίτλος σελίδας 
                $data['title'] = 'Ανακοινώσεις';
                //αρχικοποίηση μοντέλου βάσης Menu
                $menu = new Menu;
                //παίρνουμε τα δεδομένα του πίνακα Menu της βάσης δεδομένων
                $data['menu-items'] = $menu->find_all_data_from_db();
                //παίρνουμε τα δεδομένα του πίνακα Anakoinoseis  της βάσης δεδομένων
                $data['anakoinoseis'] = $a->find_all_data_from_db();
                //δείχνουμε την view μαζι με τα δεδομένα
                $this->view('announcements', $data); 
            }
        }

        //Popup Προσθήκη νέας Ανακοίνωσεις 
        public function addnew($data = []) {
            $request = new Request;
            //ελεγχος αν είναι απο get
            if ($request->is_get()) {
                //έλεγχος αν έχει συνδεθεί ο χρήστης
                if (empty($_SESSION['user_data'])) {
                    //μήνυμα σφάλματος και redirection στην σελίδα login 
                    message("Πρέπει να συνδεθείτε για να προσθέσετε Νέα Ανακοίνωση");
                    redirect('login');
                //έλεγχος αν έχει συνδεθεί κάποιςο χρήστης και άν έχει δικαιώματα διαχειρηστή
                //αν το role_user είναι 2 είναι διαχειρηστής αλλίως είναι εταιρία
                }else if (!empty($_SESSION['user_data']) && $_SESSION['user_data']->role_user === '2') {
                    $data['title'] = 'Πρσσθήκη Νέας Ανακοινώσης';
                    //αρχικοποίηση μοντέλου βάσης Menu
                    $menu = new Menu;
                    //παίρνουμε τα δεδομένα του πίνακα Menu της βάσης δεδομένων
                    $data['menu-items'] = $menu->find_all_data_from_db();
                    //δείχνουμε την σελίδα για προσθηκη ανακοίνωσης μαζι με τα data χωρις header και footer
                    $this->view_with_out_header_footer('new_ann', $data);
                //αν είναι εταιρία
                }else if (!empty($_SESSION['user_data']) && $_SESSION['user_data']->role_user === '1') {
                    //μήνυμα σφάλματος και redirection στην σελίδα home
                    message("Δεν έχετε δικαιώματα να προσθέσετε Νέα Ανακοίνωση. Επικοινωνήστε με τον διαχειρηστή std080926@ac.eap.gr");
                    redirect('home');
                }
            //ελεγχος αν είναι post 
            }else if ($request->is_post()) {
                //αρχικοποίηση μοντέλου
                $a = new Anakoinoseis;
                //παίρνουμε τα δεδομένα που ήρθαν απο post
                $data = $_POST;
                //βάζουμε την σημερινη ημερομηνια 
                $data['date_anakoinosis'] = get_date();
                $a->insert_data_to_db($data);
                //μήνυμα επιτυχής προσθήκης Ανακοίνωσης και redirection στην σελίδα announcements/complete_success
                message("Προσθέσατε την Ανακοίνωση με Επιτυχία");
                redirect('announcements/complete_success');
            }
        }
        
        //δαγραφή ανακοίνωσης
        public function delann($data = []) {
            $request = new Request;
            //ελεγχος αν είναι απο get
            if ($request->is_get()) {
                //έλεγχος αν έχει συνδεθεί ο χρήστης
                if (empty($_SESSION['user_data'])) {
                    //μήνυμα σφάλματος και redirection στην σελίδα login 
                    message("Πρέπει να συνδεθείτε σαν διαχειρηστής για να Διαγράψετε κάποια Ανακοίνωση");
                    redirect('login');
                //έλεγχος αν έχει συνδεθεί κάποιςο χρήστης και άν έχει δικαιώματα διαχειρηστή
                //αν το role_user είναι 2 είναι διαχειρηστής αλλίως είναι εταιρία
                }else if (!empty($_SESSION['user_data']) && $_SESSION['user_data']->role_user === '2') {
                    //αρχικοποίηση μοντέλου
                    $a = new Anakoinoseis;
                    if (!empty($data[2])) {
                        //διαγρφή ανακοίνωσης απο την Βάση Δεδομένων με βάση το id
                        $a->delete_data_from_db($data[2]);
                        //μήνυμα επιτυχίας και redirection στην σελιδα announcements
                        message("Η Ανακοίνωση με ID = $data[2] διαγράφτηκε με Επιτυχία");
                    }else {
                        redirect('home');
                    }
                }else if (!empty($_SESSION['user_data']) && $_SESSION['user_data']->role_user === '1') {
                    message("Δεν έχετε δικαιώματα να Διαγράψετε κάποια Ανακοίνωση. Παρακαλώ επικοινωνήστε με τον διαχειρηστή <a href='mailto:std080926@ac.eap.gr'>Send Email</a>");
                    redirect('home');
                }
            }
        }

        //κλείσμο του παραθύρου pop up προσθήκης Ανακοίνωσης
        public function complete_success($data = []){
            $request = new Request;
            $a = new Anakoinoseis;
            if ($request->is_get()) {
                $data['title'] = 'Προσθέσατε την Ανακοίνωση με Επιτυχία';
                $this->view_with_out_header_footer('complete_success', $data); 
            }
        }
    }