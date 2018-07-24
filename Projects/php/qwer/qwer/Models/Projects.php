<?php 
class Projects extends Model {

function get(){
$result=$this->base->db->query("select * from projects inner join tags on projects.tag_id=tags.id where tags.name ='psd' limit 0, 3 ");
return $result;
}



}





 ?>