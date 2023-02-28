<?php
    class Prosfores {
        use Model;
        //protected variable declare which db table to use in this model
        protected $db_table = 'prosfores';
        protected $order_col = "price_prosforas";
        protected $order_type = "asc";
        protected $limit = 100;
        protected $offset = 0;
        protected $update_id = 'id_prosforas';
        //allowed columns of the db
        protected $allowedColumns = [
            'id_user',
            'id_kausimou',
            'ending_date_prosforas',
            'date_prosforas',
            'price_prosforas'
        ];
    }