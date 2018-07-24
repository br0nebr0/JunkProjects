<?php $log=$_POST['login'];
$pas=$_POST['password'];
if (($log == 'root') && ($pas=='root')){
session_start();
$_SESSION['admin']=true;
header('Location:http://I-Mart.com/admin.php');
}
else {
  header('Location:http://I-Mart.com/admin.php');
}


?>
