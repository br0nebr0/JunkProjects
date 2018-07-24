<?php 
Class Admin extends Controller
{
 var $hash;
	// таблица с проектами
	function Index()
	{ 
	if ($this->access()){    
	$this->generate_view("Adm","Table","Projects");
	}
	else{
		$this->generate_view("Adm","Login");
	}}

	function Quit(){
	$_SESSION['hash']="none";
	header('Location: /Admin/');
	}

	// Добавление проекта
	function Add(){
		if ($this->access())			
		 {
			$this->generate_view("Adm","Add","Projects");
		}else header('Location: /Admin/');
	}
	//Добавление патчнота
	function Patch (){
	if ($this->access()) {
			$this->generate_view("Adm","Patch","Diary");
		}else header('Location: /Admin/');	
	}
	//Добавление патчнота
	function Versions (){
	if ($this->access()) {
			$this->generate_view("Adm","Versions","Diary");
		}else header('Location: /Admin/');	
	}

	function access (){
	$this->hash="sYJ1jnQsEvRU6";
	if ($_POST['login']) {
	 $salt="sYSu71goH$b7}B@CqLUO#rVBvF%In3N255";
	 $login=$_POST['login']; //admin
	 $pas=$_POST['password']; //root
	 $this->get_hash($login, $pas, $salt);
	 unset($_POST);
	}
	 if ($_SESSION['hash']==$this->hash)
	 return true;
	else return false;
	}

	function get_hash($login, $pas, $salt){
 	$pas=crypt($pas, $salt);
 	$hash=crypt($login.$pas,$salt);
 	$_SESSION['hash']=$hash;
 	}
}?>