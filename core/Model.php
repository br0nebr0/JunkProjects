<?php 
class Model {
 var $base;
 var $filter;
function __construct (){
$this->base=new DB;
include_once "Modules/filter.php";
include_once "Modules/pagination.php";
$this->filter=new filter;
}

function __destruct (){
	unset($this->base);
}

}



 ?>