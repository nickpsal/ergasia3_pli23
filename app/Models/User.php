<?php
    class User {
        use Model;
        //protected variable declare which db table to use in this model
        protected $db_table = 'user';
        protected $order_col = "id_user";
        protected $order_type = "desc";
        protected $limit = 100;
        protected $offset = 0;
        protected $update_id = 'id_user';
        //allowed columns of the db
        protected $allowedColumns = [
            'Επωνυμία_Χρήστη',
            'Αφμ_Χρήστη',
            'Διεύθυνση_Χρήστη',
            'Δήμος_Χρήστη',
            'Νομός_Χρήστη',
            'Είδος_Καυσίμου',
            'Email_Χρήστη',
            'Ρόλος_Χρήστη',
            'Username_Χρήστη',
            'Password_Χρήστη'
        ];
    }