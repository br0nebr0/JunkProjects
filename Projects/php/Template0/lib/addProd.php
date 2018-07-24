<?php
if ($_POST){
$name=$_POST['name'];
$price=$_POST['price'];
$count=$_POST['count'];
$stack=$name."_".$count."_".$price.";";
$arr=$stack;
$_SESSION['arr'][]=$arr;
if($_POST['action_basket']){
  header('Location:http://I-Mart.com/basket.php');
}
unset($_POST);
}
 ?>
