<?php 
class Pagination{
var $url;
var $count;
function __construct($count){
$this->get_url();
$this->count=$count;
$page=$this->cur_page();
$this->pages_links();
}
//Считываем текущую ссылку
function get_url(){
$this->url=$_SERVER['REQUEST_URI'];
$this->url=explode("/", $this->url);
}
// берем номер текущей страницы
function cur_page(){
	return $this->url[3];
}
// Номер предыдущей страницы
function prev_page(){
$prev=$this->cur_page()-1;
return $prev;
}
// Номер следующей страницы
function next_page(){
$next=$this->cur_page()+1;
return $next;
}
// создание ссылки на страницу
function make_link($page,$name=null){
if ($page>0) {
$link='/'.$this->url[1].'/'.$this->url[2].'/'.$page.'/'.$this->url[4];
if (!$name) {
	$name=$page;
}
if ($this->cur_page()==$page) {
	echo " <a href='$link' class='active'>".$name."</a> ";
}else
echo " <a href='$link'>".$name."</a> ";
}}
// вывод ссылок
function pages_links(){
	if ($this->count>1) {
	$this->make_link($this->prev_page(),'<<');
	for ($i=1; $i <=$this->count; $i++) { 
		$this->make_link($i); }
	if ($this->count>$this->cur_page()) {
		$this->make_link($this->next_page(),'>>');
	}
	
	}}

}?>