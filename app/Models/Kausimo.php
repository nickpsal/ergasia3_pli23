<?php
    class Kausimo {
        use Model;
        //protected variable declare which db table to use in this model
        protected $db_table = 'kausimo';
        protected $order_col = "id_kausimou";
        protected $order_type = "asc";
        protected $limit = 10;
        protected $offset = 0;
        protected $update_id = 'id_kausimou';
        //allowed columns of the db
        protected $allowedColumns = [
            'tipos_kausimou'
        ];
    }