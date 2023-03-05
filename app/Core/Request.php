<?php 
	class Request{
		/** Ελεχος αν η μέθοδος ειναι post **/
		public function is_post():bool{
			if($_SERVER['REQUEST_METHOD'] == "POST" && count($_POST) > 0){
				return true;
			}
			return false;
		}

		/** Ελεχος αν η μέθοδος ειναι get **/
		public function is_get():bool {
			if($_SERVER['REQUEST_METHOD'] == "GET" && count($_GET) > 0){
				return true;
			}
			return false;
		}

		/** παιρνουμε την τιμή της $_POST του πεδιου που δηλώνουμε **/
		public function get_value_post(string $key = '', mixed $default = ''):mixed{
			if(empty($key)){
				return $_POST;
			}elseif(isset($_POST[$key])){
				return $_POST[$key];
			}
			return $default;
		}
	}