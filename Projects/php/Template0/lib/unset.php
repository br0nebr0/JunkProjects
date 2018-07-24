<?php
if ($_GET['action']=='change'){
$_SESSION['FIO']=null;
  $_SESSION['adr']=null;
  $_SESSION['phone']=null;
  print_r($_SESSION);
  header('Location:http://I-Mart.com/basket.php');
}
 ?>
