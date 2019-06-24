<?php 
	require_once __DIR__.'/Initialize.php';
	class Database {
		private $conn;

		public function open_connection() {
			$this->conn = null;
			try {
				$this->conn = new PDO('mysql:host=' .DB_SERVER. ';dbname='.DB_NAME, DB_USER, DB_PASS);
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}catch(PDOException $e) {
				echo 'Connection Error: ' .$e->getMessage();
			}
			return $this->conn;
		}

		public function close_connection() {
			$this->conn = null;
		}
	}




 ?>