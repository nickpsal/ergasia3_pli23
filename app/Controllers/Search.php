<?php 
    class Search{
        use Controller;
        public function index($data = []){
            $data['title'] = 'Αναζήτηση';
            //αρχικοποιηση model
            $menu = new Menu;
            //παίρνομε τα δεδομένα του συγκεκριμένου model απο την βάση δεδομένων
            $data['menu-items'] = $menu->find_all_data_from_db();
            //αρχικοποιηση model
            $n = new Nomoi;
            //παίρνομε τα δεδομένα του συγκεκριμένου model απο την βάση δεδομένων
            $data['nomoi'] = $n->find_all_data_from_db();
            //αρχικοποιηση model
            $k = new Kausimo;
            //παίρνομε τα δεδομένα του συγκεκριμένου model απο την βάση δεδομένων
            $data['kausima'] = $k->find_all_data_from_db();
            //αρχικοποιηση model
            $prosfores = new Prosfores;
            //παίρνομε τα δεδομένα του συγκεκριμένου model απο την βάση δεδομένων
            $prosfores_get_data = $prosfores->find_all_prosfores_from_db();
            //εύρεση μέσου όρου και μεγιστηςε ελάχιστης τιμης απο τις τιμες προσφορων
            $avg = $prosfores->get_avg_from_db('id_kausimou', 'price_prosforas', 'ending_date_prosforas');
            //εύρεση ελάχιστης τιμης απο την μεση
            $avg_dif = Array();
            for ($i=0; $i<count($avg); $i++) {
                $min_dif_id = -1;
                $min_dif = $avg[$i]->avg;
                for ($j=0; $j<count($prosfores_get_data); $j++) {
                    if ($avg[$i]->id_kausimou == $prosfores_get_data[$j]->id_kausimou) {
                        $dif = abs($avg[$i]->avg - $prosfores_get_data[$j]->price_prosforas);
                        if ($dif < $min_dif) {
                            $min_dif_id = $j;
                        }
                    }
                }
                $prosfores_get_data[$min_dif_id]->min = true;
            }
            for ($i=0; $i<count($prosfores_get_data); $i++) {
                if (empty($prosfores_get_data[$i]->min)) {
                    $prosfores_get_data[$i]->min = false;
                }
            }
            //τα πεδία της βασης δεδομένων που θα πάρουμε απο την join
            $columns = [
                'eponimia_user',
                'address_user',
                'nomos_user'
            ];
            $user_data = Array();
            for ($i=0; $i<count($prosfores_get_data); $i++) {
                $get_user['id_user'] = $prosfores_get_data[$i]->id_user;
                //χρησιμοποιούμε την join για να πάρουμε απο την βαση δεδομένων απο τον πίνακα προσφδρές που έχουν το id του χρήστη
                //για να πάορουμε απο τον πίνακα users τα στοιχεία eponimia adress και nomos και τα αποθυκεύουμε στην λίστα
                $get_data = $prosfores->join_tables_from_db($columns, 'id_user', 'user', $get_user);
                array_push($user_data, $get_data);
            }
            $data['prosfores'] = $prosfores_get_data;
            $data['user_data'] = $user_data;
            //προβολή της σελίδας
            $this->view('search', $data); 
        }
    }