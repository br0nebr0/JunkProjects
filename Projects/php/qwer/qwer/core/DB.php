<?php 
class DB {
		var $db;
function __construct(){
	$dbhost="localhost";
	$dblogin="root";
	$dbpas="";
	$dbname="OOPStud";
$this->db=mysqli_connect( $dbhost, $dblogin, $dbpas, $dbname);
$this->db->query("SET lc_time_names= 'ru_RU' ");
$this->db->query("SET names 'utf8");
}

function __destruct(){
	$this->db->close;
}

}?>