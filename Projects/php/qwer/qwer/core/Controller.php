<?php 
Class Controller {
function generate_view($template, $content, $data){
	if ($data) {
		$data="Models/".$data.".php";
		include $data;
	}
	
include "Views/Templates/".$template.".php";
}

}




 ?>