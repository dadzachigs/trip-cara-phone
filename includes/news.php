
<?php
	require_once('database.php');
	require_once('functions.php');
	
	
	class News {
		
		public function add_news($news_title, $news, $visible, $news_date) {
			global $database;
			
			$sql = "INSERT INTO mydriver ";
			$sql .= "( ";
			$sql .= "driver_name, age, visible, licence_class, licence_number, issue_date, retested, city ";
			$sql .= ") ";
			$sql .= "VALUES( ";
			$sql .= "'{$driver_name}', '{$age}', {$visible}, '{$licence_class}', '{$licence_number}', {$issue_date}, '{$retested}', '{$city}' ";
			$sql .= ")";
			
			$result = $database->query($sql);
			
			if($result && mysqli_affected_rows($database->connection) == 1) {
				redirect_to('latest_news.php');
			} else {
				$message = "Failed to create news";
			}
		
		}
		
		
		public static function find_all_news() {
			global $database;
			
			$sql ="SELECT * FROM mydriver";
			$result_set = $database->query($sql);
			
			return $result_set;
			
		}
		
		public function delete_event($id) {
			global $database;
			
			$sql = "DELETE FROM mydriver WHERE id = {$id}";
			
			$result = $database->query($sql);
			if($result && mysqli_affected_rows($database->connection) == 1) {
					$_SESSION['message'] = "Latest News has been deleted";
					redirect_to("latest_news.php");
				} else {
					$message = "Latest News has not been deleted";
				}
		}
	}
?>