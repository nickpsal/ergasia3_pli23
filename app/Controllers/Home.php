<?php
    class Home {
        use Controller;
        public function index($data = []) {
            $data['title'] = 'Κεντρική Σελιδα';
            //get the menu items from database
            $menu = new Menu;
            $data['menu-items'] = $menu->find_all_data_from_db();
            $kausimo = new Kausimo;
            $data['kausimo'] = $kausimo->find_all_data_from_db();
            $prosfores = new prosfores;
            $avg = $prosfores->get_avg_from_db('id_kausimou');
            $min_max = $prosfores->get_min_and_max_from_db('id_kausimou');
            $data['avg'] = $avg;
            $data['nin_max'] = $min_max;
            $a = new Anakoinoseis;
            $data['anakoinoseis'] = $a->find_all_data_from_db();
            $this->view('home', $data); 
        }
    }