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
            $prosfores_data = $prosfores->find_all_data_from_db();
            //for ($i=0; $i<count($data['kausimo']); $i++) {
            //    echo $data['kausimo'][$i]->tipos_kausimou;
            //    echo "</br>";
            //}
            $a = new Anakoinoseis;
            $data['anakoinoseis'] = $a->find_all_data_from_db();
            $this->view('home', $data); 
        }
    }