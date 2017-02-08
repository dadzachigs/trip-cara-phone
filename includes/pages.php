
<?php

	require_once('database.php');
	require_once('session.php');
	require_once('functions.php');
	
	
	class Pages {
	
		public function find_all_pages() {
			global $database;
			$sql =  "SELECT * FROM pages ";
			$result_set = $database->query($sql);
			return $result_set;
		}
		
		public function find_pages_by_id($page_id) {
			global $database;
			
			$sql = "SELECT * FROM pages ";
			$sql .= "WHERE id = {$page_id} ";
			$sql .= "LIMIT 1";
			$result_set = $database->query($sql);
			
			if($result = mysqli_fetch_assoc($result_set)) {
				return $result;
			} else {
				return null;
			}
			
		
		}
		
		public function update_page_by_id($id, $page_name, $content) {
			global $database;
			
			$sql  = "UPDATE pages SET ";
			$sql .= "page_name = '{$page_name}', ";
			$sql .= "content = '{$content}' ";
			$sql .= "WHERE id = {$id} ";
			$sql .= "LIMIT 1";
			
			$resultSet = $database->query($sql);
			
			if($resultSet && mysqli_affected_rows($database->connection) == 1) {
				//$session->message("Page has been updated");
				redirect_to('manage_site.php');
			} else {
				$message ="Failed to update page information";
			}
		}
	
		public function page_navigation() {
			$output = "<nav>";
			$output .= "<ul>";
			$pages_set = $this->find_all_pages();
			while($page = mysqli_fetch_assoc($pages_set)) {
				$output .= "<li";
				$output .= " class=\"selected\"";
				$output .= ">";
				$output .= "<a href=\"manage_site.php?page=";
				$output .= urlencode($page["id"]);
				$output .= "\">";
				$output .= htmlentities($page["page_name"]);
				$output .= "</a>";
				  
			  
			}
			mysqli_free_result($pages_set);
			$output .= "</ul>";
			$output .= "</nav>";
			return $output;
				
			}
			
		public function page_navi() {
			$output = "<nav>";
			$output .= "<ul>";
			$pages_set = $this->find_all_pages();
			while($page = mysqli_fetch_assoc($pages_set)) {
				$output .= "<li";
				$output .= " class=\"selected\"";
				$output .= ">";
				$output .= "<a href=\"{$page['page_name']}.php?page=";
				$output .= urlencode($page["id"]);
				$output .= "\">";
				$output .= htmlentities($page["page_name"]);
				$output .= "</a>";
				  
			  
			}
			mysqli_free_result($pages_set);
			$output .= "</ul>";
			$output .= "</nav>";
			return $output;
				
		}
			
		public function selected_page() {
			if(isset($_GET['page'])) {
				$selected_page = $_GET['page'];
			} else {
				$selected_page = null;
			}
			return $selected_page;
		}
	
	}




?>