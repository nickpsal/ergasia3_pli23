<?php
    class User {
        use Model;
        //protected variable declare which db table to use in this model
        protected $db_table = 'user';
        protected $order_col = "id_user";
        protected $order_type = "desc";
        protected $limit = 100;
        protected $offset = 0;
        protected $update_id = "id_user";
        //allowed columns of the db
        protected $allowedColumns = [
            'eponimia_user',
            'afm_user',
            'address_user',
            'dimos_user',
            'nomos_user',
            'eidos_kausimou',
            'email_user',
            'role_user',
            'username_user',
            'password_user'
        ];

        public function validate_register() {
            $data['afm_user'] = $_POST['afm_user'];
            $res = $this->get_first_query_db($data);
            if (!empty($res)) {
                return false;
            }
            return true;
        }
    }