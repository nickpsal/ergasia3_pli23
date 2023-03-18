<?php
    class Submit{
        use Controller;
        public function index($data = []){
            $data['title'] = 'Καταχώρηση';
            //αρχικοποίηση model
            $menu = new Menu;
            $data['menu-items'] = $menu->find_all_data_from_db();
            $request = new Request;
            //έλεγχος εν ειναι post
            if ($request->is_post()) {
                //αρχικοποίηση model
                $prosfores = new Prosfores;
                //παιρνουμε το id του χρήστη απο την $_SESSION
                $search_query['id_user'] = $_SESSION['user_data']->id_user;
                //βρίσκουμε την προσφορά του συγκεκριμένου χρήστη
                $prosfores_data = $prosfores->get_prosfora_from_user($search_query);
                //ελέγχουμε αν υπάρχει ήδη προσφορα του χρήστη και αν υπάρχει 
                //ελέγχουμε αν η ημερομηνία μικρότερη απο αυτη που εβαλε 
                if (empty($prosfores_data) || $prosfores_data->ending_date_prosforas < get_date()) {
                    $data_to_insert = $_POST;
                    //αρχικοποίηση model
                    $data_to_insert['id_user'] = $_SESSION['user_data']->id_user;
                    $prosfores->insert_data_to_db($data_to_insert);
                    //μήνυμα επιτυχίας και redirection στην σελίδα αναζήτησης
                    message('Η Προσφορά καταχωρήθηκε με επιτυχία');
                    redirect('search');
                }else if ($prosfores_data->price_prosforas > $_POST['price_prosforas']) {
                    //ελεγχος αν υπα΄ρχει ενεργή προσφορά και δώσαμε μικρότερη τιμή απο αυτη της ενεργης
                    $updated_data['price_prosforas'] = $_POST['price_prosforas'];
                    $updated_data['ending_date_prosforas'] = $_POST['ending_date_prosforas'];
                    $prosfores->update_data_to_db($prosfores_data->id_prosforas, $updated_data);
                    //μήνυμα επιτυχίας και redirection στην σελίδα αναζήτησης
                    message('Υπήρχε ήδη προσφορά καταχωρημένη αλλα με μεγαλύτερη τιμή. Καναμε αντικαταστάση της Παλιάς 
                    με την Νέα τιμή και αλλάξαμε και την ημερομηνια');
                    redirect('search');
                }else {
                    //υπαρχη ήδη κατοχηρωμενη προσφορά
                    message('Η εταιρία έχει ήδη Καταχωρημένη Ενεργή Προσφορά');
                    redirect('search');
                }
            } else if ($request->is_get()) {
                //ελεγχος αν ειναι απο get
                //ελεγχος αν έχει συνδεθει χρήστης και αν είναι συδεμένος έλεγχος δικαιωμάτων
                if (empty($_SESSION['user_data'])) {
                    message("Θα πρέπει να κάνετε εγγραφή αν δεν έχετε λογαριασμό ή να συνδεθείτε για να κάνετε Νέα Καταχώρηση");
                    redirect('login');
                }else if ($_SESSION['user_data']->role_user === '2'){
                    message("Ο διαχειρηστής δεν έχει δικαιώματα να κάνει Νέα Καταχώρηση");
                    redirect('home');
                }else if ($_SESSION['user_data']->role_user === '1'){
                    //αρχικοποίηση model
                    $dimos = new Dimos;
                    //αρχικοποίηση model
                    $kausimo = new Kausimo;
                    $search_query_1['id_kentrou'] = $_SESSION['user_data']->dimos_user;
                    $search_query_2['id_kausimou'] = $_SESSION['user_data']->eidos_kausimou;
                    //παίρνουμε τα δεδομένα του model απο την βάση δεδομένων
                    $dimos_data = $dimos->get_first_query_db($search_query_1);
                    //παίρνουμε τα δεδομένα του model απο την βάση δεδομένων
                    $kausimo_data = $kausimo->get_first_query_db($search_query_2);
                    $data['dimos'] = $dimos_data->name_dimos;
                    $data['kausimo'] = $kausimo_data->tipos_kausimou;
                    //προβολή σελίδας
                    $this->view('submit', $data); 
                }
            }
        }
    }