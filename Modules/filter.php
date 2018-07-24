<?php 
class filter{
var $url;
// помещение в url массива ссылки аз АС
function __construct(){
$this->url=$_SERVER['REQUEST_URI'];
$this->url=explode("/", $this->url);
return $this->url;
}
// Взятие названия фильтра
function get_name () {
$name=$this->url[4];
return $name;
}
// Взятие номера страницы
function get_page () {
$page=$this->url[3];
return $page;	
}
// Установка запроса where
function get_filter($cell,$name=null) {
if ($name) {
$where= "where ".$cell." = '".$name."'";
return $where;
}}
// Построение финального запроса
function query($cell,$limit=1){
$name=$this->get_name();
$where=$this->get_filter($cell,$name);
$page=($this->get_page()-1)*$limit;
if (!$page) {
	$page=0;
}
if ($page<0) {
	$page=0;
}
$page=" limit ".$page.', '.$limit;
$query=$where." ".$page;
return $query;
}

}?>