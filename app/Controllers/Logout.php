<?php
      class Logout{
        use Controller;
        public function index($data = []){
            if (!empty($_SESSION['user_data'])) {
                unset($_SESSION['user_data']);
                redirect('home');
            }
        }
    }