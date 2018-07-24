<?php 
Class Main extends Controller {
// Лэндинг
function Index(){
$this->generate_view("Template","Landing","Projects");
}
// Все проекты + фильтр
function Projects(){
$this->generate_view("Template","Projects","Projects");

}
// Дневник разработки
function Diary(){
$this->generate_view("Template","Diary","Diary");

}


}
 ?>