<?php
class Register
{
    use Controller;
    public function index($data = []) {
        if (empty($_SESSION['user_data'])) {
            $request = new Request();
            $data['title'] = 'Εγγραφή Νέου Χρήστη';
            //get the menu items from database
            //αρχικοποίηση model
            $menu = new Menu;
            //παίνουμε όλα τα δεδομένα απο το μοντέλο του πίνακα της Βάσης Δεδομένων
            $data['menu-items'] = $menu->find_all_data_from_db();
            //αρχικοποίηση model
            $n = new Nomoi;
            //παίνουμε όλα τα δεδομένα απο το μοντέλο του πίνακα της Βάσης Δεδομένων
            $data['nomoi'] = $n->find_all_data_from_db();
            //αρχικοποίηση model
            $k = new Kausimo;
            //παίνουμε όλα τα δεδομένα απο το μοντέλο του πίνακα της Βάσης Δεδομένων
            $data['kausima'] = $k->find_all_data_from_db();
            //αρχικοποίηση model
            $d = new Dimos;
            //παίνουμε όλα τα δεδομένα απο το μοντέλο του πίνακα της Βάσης Δεδομένων
            $data['dimos'] = $d->find_all_data_from_db();
            //έλεγχος αν ειναι post
            if ($request->is_post()) {
                //αρχικοποίηση model
                $register = new User;
                //έλεγχος εγκυρότητας αν υπάρχει χρήστης ήδη στην Βάση δεδομένων με αυτό το ΑΦΜ
                if ($register->validate_register() === true) {
                    //παιρνάμε τα δεδομένα στου χρήστη στην Βάση δεδομένων
                    $register->insert_data_to_db($_POST);
                    //μήνημα επιτυχίας και redirection
                    message("Η Επιχείρηση γράφτηκε με επιτυχία");
                    redirect('login');
                } else {
                    //μηνυμα οτι υπάρχει ήδη επιχείρηση με αυτό το ΑΦΜ και redirection
                    message("Υπάεχει ήδη Επιχείρηση με αυτό το ΑΦΜ. Παρακαλώ επικοινωνήστε με τον διαχειρηστή <a href='mailto:std080926@ac.eap.gr'>Send Email</a>");
                    redirect('home');
                }
                //έλεγχος αν είναι get
            } else if ($request->is_get()) {
                if (empty($_SESSION['user_data'])) {
                    //προβολή της σελιδας με τα δεδομενα
                    $this->view('register', $data);
                } else {
                    //μήνυμα οτι είναι ήδη συδνεμένος κάποιος χρήστης
                    message("Είστε ήδη συνδεμένοι");
                    redirect('home');
                }
            }
        } else {
            redirect('home');
        }
    }
}
