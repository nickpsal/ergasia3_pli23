<?php
    class Home {
        use Controller;
        public function index($data = []) {
            $model = new User;
            $data['id_user'] = 1;
            $res = $model->where($data);
            show($res); die();
            $data['title'] = 'Κεντρική Σελιδα';
            $this->view('home', $data); 
        }
    }