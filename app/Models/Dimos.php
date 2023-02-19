<?php
    class Dimos {
        use Model;
        //protected variable declare which db table to use in this model
        protected $db_table = 'dimos';
        protected $order_col = "name_dimos";
        protected $order_type = "asc";
        protected $limit = 100;
        protected $offset = 0;
        protected $update_id = 'id_kentrou';
        //allowed columns of the db
        protected $allowedColumns = [
            'name_dimos'
        ];
    }