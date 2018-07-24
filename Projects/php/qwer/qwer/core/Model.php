<?php 
class Model {
 var $base;
function __construct (){
$this->base=new DB;
}

function __destruct (){
	unset($this->base);
}

}



 ?>