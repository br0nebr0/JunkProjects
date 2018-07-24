<?php 
Class Project extends Controller {
// preview
function code(){
$this->generate_view("Template","project", "Code");
}
// code
function view(){
$this->generate_view("Project","none", "View");
}

} ?>