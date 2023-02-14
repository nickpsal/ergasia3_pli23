<?php    
    trait Database {
        //connect to database
        private function connect() {
            $string = "mysql:hostname=" . DB_HOST . ";dbname="  . DB_NAME;
            return new PDO($string, DB_USER, DB_PASS);
        }

        //run query
        public function query($query, $query_data = []) {
            $con = $this->connect();
            $stm = $con->prepare($query);
            $check = $stm->execute($query_data);
            if ($check) {
                $result =  $stm->fetchAll(PDO::FETCH_OBJ);
                if (is_array($result) && count($result))  {
                    return $result;
                }
            }
            return false;
        }

        //get database row
        public function get_row($query, $data = []) {
            $con = $this->connect();
            $stm = $con->prepare($query);
            $check = $stm->execute($data);
            if ($check) {
                $result =  $stm->fetchAll(PDO::FETCH_OBJ);
                if (is_array($result) && count($result))  {
                    return $result[0];
                }
            }
            return false;
        }
    }
    