<?php 
session_start();
include_once "core/route.php";
include_once "core/Config.php";
include_once "core/DB.php";
include_once "core/Controller.php";
include_once "core/Model.php";
$init=new Route;
$init->init();
?>