<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/animate.css">
	<!-- <link rel="stylesheet" href="/css/style.css"> -->
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<script src="/js/jquery.js"></script>
	<!-- <script src="js/jquery.validate.js"></script> -->
	<script src="/js/bootstrap.js"></script>
	<title><?=$content?></title>
</head>
<body>
<div class="container-fluid">
	<div class="row">
	<div class="container-fluid">
		<div class="row">
			<!--Start Header-->
			<div class="navbar navbar-default col-md-12" style="position: fixed; z-index: 999; font-size:18pt;" >
			<div class="navbar-header bold col-md-4"><a href="/main/index">my stuff</a></div>
			<div class="col-md-4 col-md-offset-4">	
			<ul class="nav navbar-nav" style="font-size:14pt ">
	        <li><a href="/main/Projects">Projects</a></li>
	        <li> 	<a href="/main/login">About</a>

	        </li>
	      </ul>
			</div>
			</div>
			<!--End Header-->
			<!--Start Main-->
			<div class="container" style="min-height:95vh; margin-top:75px; ">
			<?php include "Views/".$content.".php";?>		
	</div>
</div>
		



	
	
	<br>
</div>

<div style="background: black;">asd</div>
</body>
</html>