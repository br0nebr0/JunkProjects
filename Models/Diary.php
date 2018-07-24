<?php 
class Diary extends Model{

function get(){
$query="select * from Diary ORDER BY id DESC";
$result=$this->base->db->query($query);
return $result;
}
function post(){
	if ($_POST['add']) {
 		$this->add();
 	}
 	if ($_POST['Delete']) {
 		$this->delete();
 	}
 	if ($_POST['Change']) {
 		$this->change();
 	}
}

function delete(){
  $id=$_POST['id'];
	$query="Delete from `Diary` where id=".$id;
 $this->base->db->query($query);
 unset($_POST);
}

function change(){
 	$id=$_POST['id'];
 	$patch=$_POST['Patch'];
 	$fet=$_POST['Planed'];
 	$date=$_POST['date'];
    $query="UPDATE `Diary` SET `date`='".$date."',`Patch_note`='".$patch."', `Features`='".$fet."' WHERE id=".$id;
 $this->base->db->query($query);
  echo $this->base->db->error;
 unset($_POST);
}

function add(){
 $ver=$_POST['version'];
 $patch=$_POST['Patch'];
 $fpatch=$_POST['FPatch'];
 $patch= $this->to_list($patch);
 $fpatch= $this->to_list($fpatch);
  $query=
 "INSERT INTO `Diary`(`Patch_note`, `Features`, `version`, `date`) VALUES ('".$patch."', '".$fpatch."', '".$ver."', NOW())";
  $this->base->db->query($query);	
  echo $this->base->db->error;
  unset($_POST);
}

function to_list($str){
$order= array("\r\n", "\n", "\r");
$str= "<ul><li>".$str."</li></ul>";
$str= str_replace($order, "</li><li>", $str);
return $str;
}
}
?>