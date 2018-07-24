<?php
$dbHost='localhost';
$dbName='phones';
$dbUser='root';
$dbPass='';
$myConnect = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
mysqli_query ($myConnect,"set_client='utf8'");
mysqli_query ($myConnect,"set character_set_results='utf8'");
mysqli_query ($myConnect,"set collation_connection='utf8_general_ci'");
mysqli_query ($myConnect,"SET NAMES utf8");
 ?>
