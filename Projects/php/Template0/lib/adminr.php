<?php
$row=$_POST['row'];
include 'dbconnect.php';
for ($i=1;$i<=$row; ++$i){
$a[$i]= $_POST["status".$i.""];
mysqli_query($myConnect,"UPDATE `ord` SET `status`='$a[$i]' WHERE `id`=$i");}
echo mysqli_error($myConnect);
header('Location:http://I-Mart.com/admin.php');

 ?>
