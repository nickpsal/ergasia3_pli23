<?php
    class Menu {
        use Model;
        //protected variable declare which db table to use in this model
        protected $db_table = 'menu';
        protected $order_col = "id_menu";
        protected $order_type = "asc";
        protected $limit = 100;
        protected $offset = 0;
        protected $update_id = 'id_menu';
        //allowed columns of the db
        protected $allowedColumns = [
            'title_menu',
            'controller_menu',
            'menu_access'
        ];
    }