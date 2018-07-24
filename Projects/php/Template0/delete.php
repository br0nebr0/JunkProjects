<?php
include 'lib/dbconnect.php';
$id=$_GET['id'];
mysqli_query($myConnect,"DELETE FROM `phone` WHERE `id`=$id");
mysqli_close($myConnect);
header('Location:http://I-Mart.com/routes.php');
exit;
?>
