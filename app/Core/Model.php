<?php   
    trait Model{
        use Database;
        public $errors = [];

        public function find_all() {
            $query = "SELECT * FROM $this->db_table ORDER BY $this->order_col $this->order_type limit $this->limit offset $this->offset";
            return $this->query($query);
        }

        public function where($data, $data_not  =  []) {
            $keys = array_keys($data); 
            $keys_not = array_keys($data_not);
            $query = "SELECT * FROM $this->db_table  where ";
            foreach($keys as $key){
                $query .= $key . "=:" . $key .  " && ";
            }
            foreach($keys_not as $key){
                $query .= $key . "!=:" . $key .  " && ";
            }
            $query = trim($query, " &&");
            $query .= " limit $this->limit offset $this->offset";
            $data = array_merge($data, $data_not);
            return $this->query($query,$data);
        }

        public function first($data, $data_not  =  []) {
            $keys = array_keys($data); 
            $keys_not = array_keys($data_not);
            $query = "SELECT * FROM $this->db_table  where ";
            foreach($keys as $key){
                $query .= $key . "=:" . $key .  " && ";
            }
            foreach($keys_not as $key){
                $query .= $key . " !=:" . $key .  " && ";
            }
            $query = trim($query, " &&");
            $query .= " limit $this->limit offset $this->offset";
            $data = array_merge($data, $data_not);
            $result = $this->query($query, $data);
            if ($result) {
                return $result[0];
            }
            return false;
        }

        public function insert_query($data){
            if (!empty($this->allowedColumns)) {
                foreach($data as $key=>$value) {
                    if (!in_array($key, $this->allowedColumns)) {
                        unset($data[$key]);
                    }
                }
            }
            $data2['afm_user']  = $data['afm_user'];
            $res = $this->first($data2);
            if (empty($res)) {
                if ($this->db_table === 'user') {
                    $data['password_user'] = password_hash($data['password_user'],PASSWORD_DEFAULT);
                    $data['role_user'] = 1;
                }
                $keys = array_keys($data);
                $query = "insert into $this->db_table (".implode(",", $keys).") values (:".implode(",:", $keys).")";
                $this->query($query, $data);
                return true;
            }
            return false;
        }

        public function update_query($id, $data, $id_column = '') {
            $id_column = $this->update_id;
            $keys = array_keys($data); 
            $query = "UPDATE $this->db_table SET ";
            foreach($keys as $key){
                $query .= $key . "=:" . $key .  ", ";
            }
            $query = trim($query, ", ");
            $query .= " where $id_column = :$id_column ";
            $data[$id_column] = $id;
            if ($this->db_table === 'user' && !empty($data['password_user'])) {
                $data['password_user'] = password_hash($data['password_user'],PASSWORD_DEFAULT);
            }
            $this->query($query, $data);
            return false;
        }

        public function delete($id) {
            $id_column = $this->update_id;
            $data[$id_column] = $id;
            $query = "DELETE FROM $this->db_table where $id_column = :$id_column";
            $this->query($query, $data);
            return false;
        }
    }