<?php 
Class Admin extends Controller{

function __construct(){	
}

function Index(){
$this->generate_view("Template","Content");
}

function Test(){
	echo "<br>test complete";
}



}


 ?>