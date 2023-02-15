<?php
    class Nomoi {
        use Model;
        //protected variable declare which db table to use in this model
        protected $db_table = 'nomos';
        protected $order_col = "id_nomou";
        protected $order_type = "asc";
        protected $limit = 100;
        protected $offset = 0;
        protected $update_id = 'id_nomou';
        //allowed columns of the db
        protected $allowedColumns = [
            'onomasia_nomou'
        ];
    }