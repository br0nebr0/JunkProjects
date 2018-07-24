<?php
session_start();

if ($_POST['delete']){
$count=$_POST['count'];
for ($i=0;$i<=$count;$i++){
if ($_POST["$i"]) {
unset($_SESSION['arr']["$i"]);
sort($_SESSION['arr']);
}

}
header('Location:http://I-Mart.com/basket.php');
}

if($_POST['deleteAll'])
{unset($_SESSION['arr']);
header('Location:http://I-Mart.com/basket.php');
}

if($_POST['add'])
{
include 'dbconnect.php';
$FIO=$_SESSION['FIO'];
$adr=$_SESSION['adr'];
$phone=$_SESSION['phone'];
$prod=$_POST['stack'];
$sql="INSERT INTO `ord`(`FIO`, `adr`, `num`, `prod`, `status`) VALUES ('$FIO','$adr','$phone','$prod','wait')";
mysqli_query($myConnect,$sql);
unset($_SESSION['arr']);
$_SESSION['buy']=1;
header('Location:http://I-Mart.com/basket.php');
}



 ?>
