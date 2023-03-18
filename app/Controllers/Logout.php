<?php
      class Logout{
        use Controller;
        public function index($data = []){
            //έλεγχος αν έχει συνδεθεί ο χρήστης
            if (!empty($_SESSION['user_data'])) {
                //αφαιρούμε απο την super global $_SESSION τα δεδομένα του χρήστη
                unset($_SESSION['user_data']);
                redirect('home');
            }else {
                redirect('home');
            }
        }
    }