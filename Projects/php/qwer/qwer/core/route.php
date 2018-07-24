<?php 
class Route {
var $url;
var $view;
// Вносим в массив данные из адресной строки
function get_url(){
$this->url=$_SERVER['REQUEST_URI'];
$this->url=explode("/", $this->url);
return $this->url;
}
// считываем первую часть строки после домена, при отсутствии ссылаемся на Main
function get_controller(){
	$controller=$this->get_url()[1];
	if ($controller){
	$controller=ucfirst(strtolower($controller));
	$file="Controllers/".$controller.".php";
if (file_exists($file)) {
	include_once $file;
	$this->view=new $controller;
}}
else {
include_once "Controllers/Main.php";
$this->view=new Main;
}}

// Считываем вторую часть строки, при отсутствии ссылаемся на Index
function get_page(){
	$this->get_controller();
	$func=$this->get_url()[2];
if ($func=="") {
	$func="Index";	}
	else{
	if(!method_exists($this->view, $func)){
		$func="Index";
	}
}
$this->view->$func();
}

// Запускаем весь скрипт с проверками и подключаем нужные файлы.
function init (){
$this->get_page();
}

function get_filter(){
	$filter=$this->get_url()[3];
	echo $filter;


}



}
 ?>