<?php
    class Anakoinoseis {
        use Model;
        //protected variable declare which db table to use in this model
        protected $db_table = 'anakoinosis';
        protected $order_col = "id_anakoinosis";
        protected $order_type = "desc";
        protected $limit = 10;
        protected $offset = 0;
        protected $update_id = 'id_anakoinosis';
        //allowed columns of the db
        protected $allowedColumns = [
            'date_anakoinosis',
            'title_anakoinosis',
            'text_anakoinosis'
        ];
    }