<?php 
class Code {
 var $url;
 var $cur_project;
 var $cur_fold;
 var $file_id;

 // Сканируем необходимый путь
 function __construct(){
	 $this->url=$_SERVER['REQUEST_URI'];
	 $this->url=explode("/", $this->url);
	 $this->url=str_replace("%20"," ", $this->url);
	 $this->get_path();
	 $this->set_data();
 }
 
 //выдаем путь к файлу 
function get_path(){
	 $this->cur_project="Projects/".$this->url[3]."/".$this->url[4]."/";
	}

 //сканируем папку, выдаем папки и файлы 
 function get_files(){
 	$files=scandir($this->cur_project.$this->cur_fold);
 	return $files;
 }

 // Проверка файла как картинку
	function is_image($string){
	 		$file=@getimagesize($string);
	 	if ($file[0]) {
	 	$path=$rest = substr($this->path, 1);
	 	echo "<img src='/".$string."' class='code-image'>";
	 	return true;
	 }
 		else
 			return false;
		 }

 // Считываем переданные параметры
 function set_data(){
 if ($_POST['dir']) {
  $this->cur_fold=$_POST['dir'];
 }
 if ($_POST['file']) {
 	$this->file_id=$_POST['file'];
 }

 }

 // Выводим элементы массива в директории
 function get_list(){
 	$i=0;
	 foreach ($this->get_files() as $value) {
	 	if ($i>0) {
	 		if ($i!=1) {
	 			$element=$this->cur_fold.$value;
	 			if (is_dir($this->cur_project.$element)) {
	 			echo "<form method='POST'>";
	 			echo "<input type='hidden' name='dir' value='".$element."/'>";
	 			echo "<input type='hidden' name='file' value=''><br>";
	 			echo "<button class='bt-dir' type='submit'> <i class='fa fa-folder'></i> ".$element."</button>";
	 			echo "</form>";
	 			}
	 			else{
	 			echo "<form method='POST'>";
	 		   echo "<input type='hidden' name='dir' value=".$_POST['dir'].">";
	 		   echo "<input type='hidden' name='file' value=".$element."><br>";
	 		   echo "<button type='submit' class='bt-file'> <i class='fa fa-file'></i> ".$element."</button>";
	 		   echo "</form>";
	 			}		
	 		}
	 		else{echo "<form method='POST'>";
	 			echo "<input type='hidden' name='dir' value='".$this->cut()."'>";
	 			echo "<input type='hidden' name='file' value=''><br>";
	 			echo "<button class='bt-dir' type='submit'><i class='fa fa-arrow-up'></i> back</button>";
	 			echo "</form>";
	 		}
	 	} $i++;
	 }
  }

  function cut(){
  	$path=$_POST['dir'];
  	$path=explode("/", $path);
  	$lenght=count($path);
  	$lenght--;
  	$i=0;
  	if ($lenght!=1) {
  	
  	while ($i<$lenght-1) {
  		$fold=$fold.$path[$i]."/";
  	 $i++;
  	}
  	}
  	else
  	$fold="";
  	return $fold;
  }

 // Получаем выбранный файл и выводим код с нумерацией строк
 function get_file(){
 	if ($this->file_id) {
 	$filepath=$this->cur_project.$this->file_id;
 		$this->view_file($filepath);
 	}
  }

 function view_file($filepath){
 	if (!$this->is_image($filepath)) {
 		$this->show_code($filepath);
 	}
 }

 // Выводим код
  function show_code($filepath){
  $file=file($filepath);
  $i=0;
  foreach ($file as &$string) {
  $i++;
  $string=htmlentities($string);
  echo "<p><b style='color:#aaa'>".$i."</b> ".$string."</p>";}
  }

 }?>
