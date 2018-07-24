<html>
<head>
<meta charset='utf-8'>
<link rel="stylesheet" type="text/css" href="css/style.css" >
<title>
<?php
ini_set('display_errors','Off');
session_start();
if(!$_SESSION['admin'])
{if ($_SESSION['admin']!=true) {
  $_SESSION['admin']=false;
}}
 ?>
</title>
</head>
<body>
  <?php
include 'addProd.php'
   ?>
<div id='main'>
<header>
<div id='logo'>
<img src='img/logo.png'>
</div>
<div id='menu'>
<a href='index.php'><span>Главная </span></a>
<a href='routes.php'><span>Роутеры </span></a>
<a href='gar.php'><span>Гарантия</span></a>
<a href='cont.php'><span>Контакты</span></a>
<?php
if ($_SESSION['admin']) {
echo "<a href='form.php'><span>Добавить</span></a>";
}
else{
echo "<a href='basket.php'><span>Корзина</span></a>";
}


?>
</div>
</header>
