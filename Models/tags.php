<?php 
Class tags extends Model{

	function get (){
 	$query = "select name from tags";
 	$result=$this->base->db->query($query);
 	return $result;} }?>