<?php
	require_once('database.php');
	require_once('functions.php');
	require_once('session.php');
	class Events {
		
		public function add_event($car_type, $car_name, $reg_number, $insurance, $status, $date_checked) {
			global $database;
			
			$sql = "INSERT INTO mycar ";
			$sql .= "( ";
			$sql .= "car_type, car_name, reg_number, insurance, status, date_checked";
			$sql .= ") ";
			$sql .= "VALUES( ";
			$sql .= "'{$car_type}','{$car_name}', '{$reg_number}', '{$insurance}','{$status}', '{$date_checked}' ";
			$sql .= ")";
			
			$result_set = $database->query($sql);
			
			if($result_set && mysqli_affected_rows($database->connection) == 1) {
				redirect_to('school_event.php');
			} else {
				$message = "Failed to add vehicle Information";
			}
		}
		
		public static function find_all_events() {
			global $database;
			
			$sql ="SELECT * FROM mycar";
			$result_set = $database->query($sql);
			
			return $result_set;
			
		}
		
		public function delete_event($id) {
			global $database;
			
			$sql = "DELETE FROM mycar WHERE id = {$id}";
			
			$result = $database->query($sql);
			if($result && mysqli_affected_rows($database->connection) == 1) {
					$_SESSION['message'] = "Vehicle Information has been deleted";
					redirect_to("school_event.php");
				} else {
					$message = "Vehicle Information has not been deleted";
				}
		}
	}
?>