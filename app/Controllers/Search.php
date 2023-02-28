<?php 
    class Search{
        use Controller;
        public function index($data = []){
            $data['title'] = 'Αναζήτηση';
            //get the menu items from database
            $menu = new Menu;
            $data['menu-items'] = $menu->find_all_data_from_db();
            $n = new Nomoi;
            $data['nomoi'] = $n->find_all_data_from_db();
            $k = new Kausimo;
            $data['kausima'] = $k->find_all_data_from_db();
            $prosfores = new Prosfores;
            $prosfores_get_data = $prosfores->find_all_data_from_db();
            $avg = $prosfores->get_avg_from_db('id_kausimou', 'price_prosforas', 'ending_date_prosforas');
            $avg_dif = Array();
            for ($i=0; $i<count($avg); $i++) {
                $min_dif_id = -1;
                $min_dif = $avg[$i]->avg;
                for ($j=0; $j<count($prosfores_get_data); $j++) {
                    if ($avg[$i]->id_kausimou == $prosfores_get_data[$j]->id_kausimou) {
                        $dif = $avg[$i]->avg - $prosfores_get_data[$j]->price_prosforas;
                        if ($dif < $min_dif) {
                            $min_dif = $dif;
                            $min_dif_id = $prosfores_get_data[$j]->id_prosforas;
                        }
                    }
                }
                array_push($avg_dif, $min_dif_id);
            }
            $data['avg'] = $avg_dif;           
            $columns = [
                'eponimia_user',
                'address_user',
                'nomos_user'
            ];
            $user_data = Array();
            for ($i=0; $i<count($prosfores_get_data); $i++) {
                $get_user['id_user'] = $prosfores_get_data[$i]->id_user;
                $get_data = $prosfores->join_tables_from_db($columns, 'id_user', 'user', $get_user);
                array_push($user_data, $get_data);
            }
            $data['prosfores'] = $prosfores_get_data;
            $data['user_data'] = $user_data;
            $this->view('search', $data); 
        }
    }