<?php
    class Home {
        use Controller;
        public function index($data = []) {
            $data['title'] = 'Κεντρική Σελιδα';
            $this->view('home', $data); 
        }
    }