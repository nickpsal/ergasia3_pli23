<?php 
	class Request{
		/** check which post method was used **/
		public function get_method():string{
			return $_SERVER['REQUEST_METHOD'];
		}

		/** check if something was posted **/
		public function is_post():bool{
			if($_SERVER['REQUEST_METHOD'] == "POST" && count($_POST) > 0){
				return true;
			}
			return false;
		}

		public function is_get():bool {
			if($_SERVER['REQUEST_METHOD'] == "GET" && count($_GET) > 0){
				return true;
			}
			return false;
		}

		/** get a value from the POST variable **/
		public function get_value_post(string $key = '', mixed $default = ''):mixed{
			if(empty($key)){
				return $_POST;
			}elseif(isset($_POST[$key])){
				return $_POST[$key];
			}
			return $default;
		}

		/** get a value from the GET variable **/
		public function get_value_get(string $key = '', mixed $default = ''):mixed{
			if(empty($key))	{
				return $_GET;
			}elseif(isset($_GET[$key])){
				return $_GET[$key];
			}
			return $default;
		}
	}