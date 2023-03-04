<?php
    class Home {
        use Controller;
        public function index($data = []) {
            $data['title'] = 'Κεντρική Σελιδα';
            //αρχικοποίηση model 
            $menu = new Menu;
            //παίρνουμε τα δεδομένα απο την Βάση δεδομένων του μοντελου
            $data['menu-items'] = $menu->find_all_data_from_db();
            //αρχικοποίηση model 
            $kausimo = new Kausimo;
            //παίρνουμε τα δεδομένα απο την Βάση δεδομένων του μοντελου
            $data['kausimo'] = $kausimo->find_all_data_from_db();
            //αρχικοποίηση model 
            $prosfores = new prosfores;
            //εύρεση μέσης τιμής των τιμών προσφορών της Βάσης Δεδομένων με βάση την ημερομηνία 
            $avg = $prosfores->get_avg_from_db('id_kausimou', 'price_prosforas', 'ending_date_prosforas');
            //εύρεση μέγιστης και ελάχιστης των τιμών προσφορών της Βάσης Δεδομένων με βάση την ημερομηνία 
            $min_max = $prosfores->get_min_and_max_from_db('id_kausimou', 'price_prosforas', 'ending_date_prosforas');
            $data['avg'] = $avg;
            $data['nin_max'] = $min_max;
            $a = new Anakoinoseis;
            //παίρνουμε τα δεδομένα απο την Βάση δεδομένων του μοντελου
            $data['anakoinoseis'] = $a->find_all_data_from_db();
            //δείχνουμε την view μαζι με τα δεδομένα
            $this->view('home', $data); 
        }
    }