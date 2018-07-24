<?php
include 'dbconnect.php';
$mod=mysql_real_escape_string($_GET['mod']);
$name=mysql_real_escape_string($_GET['name']);
$id=$_GET['id'];
$price=$_GET['price'];
$sim=$_GET['sim'];
$scan=$_GET['scan'];
$scr=mysql_real_escape_string($_GET['scr']);
$cam=$_GET['cam'];
$prop=mysql_real_escape_string($_GET['prop']);
$myConnect = mysql_connect($dbHost,$dbUser,$dbPass);
mysql_select_db($dbName,$myConnect);

mysql_query("UPDATE `phone` SET `mod`='$mod', `name`='$name', `price`=$price, `simcard`=$sim, `scan`=$scan, `screen`='$scr', `camera`=$cam, `prop`='$prop' WHERE `id`=$id",$myConnect);
mysql_close($myConnect);
//header('Location:http://i-mart.com/routes.php');
exit;
?>
