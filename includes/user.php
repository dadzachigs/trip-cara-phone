<?php

	require_once('database.php');
	require_once('functions.php');
	require_once('session.php');

	class User {
	
		public $id;
		public $surname;
		public $username;
		public $name;
	
		public static function find_all() {
			global $database;
			$sql = "SELECT * FROM users";
			return self::find_by_sql($sql);
		}
		
		public static function find_by_id($id=0) {
			global $database;
			$sql = "SELECT * FROM users WHERE id={$id}";
			$result_array = self::find_by_sql($sql);
			return !empty($result_array) ? array_shift($result_array) : false;
		}
	
		
		public static function find_by_sql($sql){
			global $database;
			$result_set = $database->query($sql);
			$object_array = array();
			while($row = $database->fetch_array($result_set)) {
				$object_array[] = self::instantiate($row);
			}
			return $object_array;
		}
		
		public static function authenticate($username="", $password="") {
			global $database;
			
			$username = $database->escape_value($username);
			$password = $database->escape_value($password);
			
			$sql = "SELECT * FROM users ";
			$sql .= "WHERE username = '{$username}' ";
			$sql .= "AND password = '{$password}' ";
			$sql .= "LIMIT 1";
			
			$result_array = self::find_by_sql($sql);
			return !empty($result_array) ? array_shift($result_array) : false;
		}
		
		public function full_name() {
			if(isset($this->name) && isset($this->surname)) {
				$full_name = $this->name ." " . $this->surname;
			} else {
			
			}
			return $full_name;	
			
		}
		
		
		private static function instantiate($record) {
			$object = new self;
			//$object->id = $record['id'];
			//$object->username = $record['username'];
			//$object->name = $record['name'];
			//$object->surname = $record['surname'];
			//return $object;
			
			foreach($record as $attribute=>$value) {
				if($object->has_attribute($attribute)) {
					$object->$attribute = $value;
				}
			}
			return $object;
		}
		
		private function has_attribute($attribute) {
			
			
			$object_vars = get_object_vars($this);
			
			return array_key_exists($attribute, $object_vars);
	}
	
		public function add_teacher($teacherID, $password, $description, $name, $surname, $email, $contact) {
			global $database;
			
			$sql = "INSERT INTO teachers ";
			$sql .= "( ";
			$sql .= "teacherID, password, description, name, surname, Email, contact_details ";
			$sql .= ") ";
			$sql .= "VALUES( ";
			$sql .= "'{$teacherID}', '{$password}', '{$description}', '{$name}', '{$surname}', '{$email}', '{$contact}' ";
			$sql .= ")";
			
			$result_set = $database->query($sql);
			
			if($result_set && mysqli_affected_rows($database->connection) == 1) {
				$_SESSION['message'] = "New Teacher has been successfully created";
				redirect_to("view_teachers.php");
			} else {
				return false;
			}
			
		
	}
	
		public function find_all_teachers() {
			global $database;
			$sql =  "SELECT * FROM teachers ";
			$result_set = $database->query($sql);
			return $result_set;
		}
}

?>