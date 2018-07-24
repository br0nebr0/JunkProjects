<?php 
Class Main extends Controller {

function Index(){
$this->generate_view("Template","Landing",null);
}

function Projects(){
$this->generate_view("Template","Projects","Projects");

}


}
 ?>