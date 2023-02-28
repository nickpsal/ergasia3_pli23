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