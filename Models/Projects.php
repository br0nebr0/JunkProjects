<?php 
class Projects extends Model {
var $projects=12;
// Выводим 12 проектов
function get(){
$query=$this->filter->query("tags.name",$this->projects);
$query="select * from Projects inner join tags on Projects.tag_id=tags.id ".$query;
$result=$this->base->db->query($query);
return $result;
}

function get_min(){
$query="select * from Projects inner join tags on Projects.tag_id=tags.id where tag_id = 1 LIMIT 3";
$result=$this->base->db->query($query);
return $result;
}
// считываем пост-запрос на добавление
function post(){
	if ($_POST['add']) {
 		$this->read_project();
 	}
 	if ($_POST['Delete']) {
 		$this->del_project();
 	}
 	if ($_POST['Change']) {
 		$this->change();
 	}
}
// Удаляем проект
 function del_project(){
 $id=$_POST['id'];
 $tag=$_POST['tag'];
 $name=$_POST['name'];
 $path="Projects/".$tag."/".$name;
 $this->remove_dir($path);
 $query="Delete from `Projects` where id=".$id;
 $this->base->db->query($query);
 unset($POST['Delete']);
 unset($POST['id']);
 unset($POST['tag']);
 unset($POST['name']);
 }

 // вывод кол-ва страниц
 function pages(){
	$filter=$this->filter->url[4];
	$query="select * from projects";
	if ($filter) {
		$query=$query." inner join tags on projects.tag_id=tags.id where tags.name = '".$filter."'";}
	$res=$this->base->db->query($query)->num_rows;
	$pages=$res/$this->projects;
	$pages=intval($pages);
	if ($res%$this->projects!=0) {
		$pages++;
	}
	if ($pages==1) {
	return null;
	}
	else
	return $pages;
	}


 // считываем загруженный проект, заходим в папку
 function read_project (){
 	$project=$_FILES['project']['name'];
 	$project=explode(".", $project);
 	if ($project[1]=="psd") {
 		$this->upload_PSD($project[0]);
 	}
 	elseif ($project[1]=="zip") {
 		$this->upload_ZIP($project[0]);
 	}
 	else{
 	$this->error("Uncorrect Type");}
 	unset($_FILES);
    unset($_POST['Project_type']);
    unset($_POST['text']);
     unset($_POST['add']);
 	}

//Загрузка psd и картинки в созданную папку 

function upload_PSD($name){
	$path="Projects/psd/".$name;
	if (!file_exists($path)){
	mkdir($path);
	move_uploaded_file($_FILES['project']["tmp_name"], $path."/".$name.".psd");
	$image=$this->upload_jpg($path);
	$err=$this->add_project($name, $image);}
	if ($err) {
   	$this->remove_dir($path);
   	$this->error("Database Error № ".$err);
   }
	}


// Загрузка архива и картинки в созданную папку

function upload_ZIP($name){
	$type=$_POST['Project_type'];
	$path="Projects/".$type."/".$name;
		if ($this->Make_dir($path,$name)) {
		$image=$this->upload_jpg($path);
			if ($image) {
			$this->Unzip($name,$path);
			$err=$this->add_project($name, $image);
				if ($err) {
				$this->remove_dir($path);
				$this->error("Database Error № ".$err);
			}
		}
	}
}

function error($err){
	echo "<h1> error: ".$err."</h1>";
}
// создаем каталог и загружаем архив, если его не существовало
function Make_dir($path,$name){
 if (!file_exists($path)) {
 	mkdir($path);
 	move_uploaded_file($_FILES['project']["tmp_name"], $path."/".$name.".zip");
 	return true;
 	 }
else{
	$this->error("A project with this name already exists");
	return false;}
 }

// загрузка картинки

function upload_jpg($path){
	$image=$_FILES['image']['name'];
	$tmp=$_FILES['image']["tmp_name"];
	if ($tmp) {
	move_uploaded_file($tmp, $path."/".$image);
	return $image;
	}
	else{
	$this->remove_dir($path);
	$this->error("Uncorrect image"); 
	 return false;
	}
}

// Удаление папки
function remove_dir($path){
	if ($objs=glob($path."/*")) {
		foreach ($objs as $obj) {
			if (is_dir($obj)) {
				@unlink($obj."/.htaccess");
				$this->remove_dir($obj);				
			}
			else
			unlink($obj);
		}
	}
	rmdir($path);
}

// распаковка архива

function Unzip($name,$path){
 $filename=$path."/".$name.".zip";
 $zip = new ZipArchive;
 $zip->open($filename);
 $zip->extractTo($path);
 $zip->close();
 }

 // Вносим изменения в описание проекта
 function change(){
 	$id=$_POST['id'];
 	$text=$_POST['text'];
 	$date=$_POST['date'];
	 $query="UPDATE `Projects` SET `date`='".$date."',`text`='".$text."' WHERE id=".$id;
	 $this->base->db->query($query);
	 echo $this->base->db->error;
	 unset($POST['Change']);
	 unset($POST['id']);
	 unset($POST['text']);
	 unset($POST['date']);
 }

 // Добавление в бд
function add_project($name,$image){
    $tag_id=$this->get_id($_POST['Project_type']);
    $text=$_POST['text'];
    $query="INSERT INTO `Projects`(`tag_id`, `Title`, `date`, `image`, `text`) VALUES (".$tag_id.",'".$name."', NOW() ,'".
    $image."','".$text."')";
    $this->base->db->query($query);	
    return $this->base->db->errno;
    }

    // получаем tag_id
   function get_id($type){
   	if ($type=="html") {
   	return 1;}
   	elseif ($type=="psd") {
   	return 2;}
   	elseif ($type=="php") {
   	return 3;}
   	}

   	// отображаем кнопки действий в зависимости от типа
function show_buttons ($name,$title){
 if ($name=="html" ) { ?>
 	<a href="/Projects/<?=$name?>/<?=$title?>/index.<?=$name?>" target='_blank' class="act-bt" title="view project"><i class="fa fa-eye"></i></a>
	<a href="/Project/code/<?=$name?>/<?=$title?>" title="view project code" class="act-bt">
  	<i class="fa fa-code"></i></a>
  	 <a href="/Projects/<?=$name?>/<?=$title?>/<?=$title?>.zip" title="download project" class="act-bt">
  	<i class="fa fa-arrow-down"></i></a>
 <?php }
if ($name=="psd" ) { ?>
  	<a href="/Projects/<?=$name?>/<?=$title?>/<?=$title?>.psd" title="download project" class="act-bt">
  	<i class="fa fa-arrow-down"></i></a>	
 <?php }
   if ($name=="php" ) { ?>
	<a href="/Project/code/<?=$name?>/<?=$title?>" title="view project code" class="act-bt">
  	<i class="fa fa-code"></i></a>
  	 	 <a href="/Projects/<?=$name?>/<?=$title?>/<?=$title?>.zip" title="download project" class="act-bt">
  	<i type="button" class="fa fa-arrow-down"></i></a>	
 <?php }
		}

 } ?>