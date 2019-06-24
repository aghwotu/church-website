<?php 
	function include_layout_template($template="") {
		include __DIR__ . "/../layouts/" . $template; 	
	}

	function include_layout_template_demo($folder_path="", $template="") {
		include __DIR__ . $folder_path . $template;
	}

?>