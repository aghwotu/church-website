<?php 
	require_once __DIR__.'/Initialize.php';
	class Sermons extends Database {
		private $table = 'sermontb';

		// Sermon properties 
		public $sermon_theme;
		public $sermon_title;
		public $sermon_taken_by_fname;
		public $sermon_taken_by_lname;
		public $sermon_category; 
		public $sermon_congregation;
		public $sermon_pdf;
		public $sermon_audio;
		public $sermon_image;
		

		public function create($sermon_theme, $sermon_title, $sermon_taken_by_fname, 
							$sermon_taken_by_lname, $sermon_category, $sermon_congregation, 
							$sermon_pdf, $sermon_audio, $sermon_image) {
			try {
				$query = "INSERT INTO '{$this->table}'(sermon_theme, sermon_title, sermon_taken_by_fname, 										sermon_taken_by_lname, sermon_category, sermon_congregation, 
										sermon_pdf, sermon_audio, sermon_image) 
							VALUES(:sermon_theme, :sermon_title, :sermon_taken_by_fname, 
							:sermon_taken_by_lname, :sermon_category, :sermon_congregation, 
							:sermon_pdf, :sermon_audio, :sermon_image)";
				$data = array(
							':sermon_theme' => $this->sermon_theme,
							':sermon_title' => $this->sermon_title,
							':sermon_taken_by_fname' => $this->sermon_taken_by_fname,
							':sermon_taken_by_lname' => $this->sermon_taken_by_lname,
							':sermon_category' => $this->sermon_category,
							':sermon_congregation' => $this->sermon_congregation,
							':sermon_pdf' => $this->sermon_pdf,
							':sermon_audio' => $this->sermon_audio,
							':sermon_image' => $this->sermon_image
						);
				
				$stmt = $this->conn->prepare($query);

				$this->conn->beginTransaction();

				$stmt->execute($data);

				$this->conn->commit();
			} catch (Exception $e) {
				$this->conn->rollback();
			}
				

						 
		}
	

		



	}

 ?>