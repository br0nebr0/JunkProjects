<!DOCTYPE html>
<html lang="ru">
<head>
	 <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/animate.css">
	<link rel="stylesheet" href="/css/Projects.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<script src="/js/jquery.js"></script>
	<!-- <script src="js/jquery.validate.js"></script> -->
	<script src="/js/bootstrap.js"></script>
	<title><?=$content?></title>
</head>
<body>
<div  id="menu">
 <a href="/main/landing">Главная</a>
 <a href="/main/projects">Проекты</a>
 <a id="me_href" href="/main/landing#me">Обо мне</a>
 <a href="/main/Diary">Журнал разработки</a>
</div>
<a  class="btmenu">
			<span class="sp1 "></span>
			<span class="sp2 "></span>
			<span class="sp3 "></span>
		</a>
	<script>
		$(".btmenu").click(function(){	
		$('.sp1').toggleClass( "crossin" );
		$('.sp2').toggleClass( "crosshide" );
		$('.sp3').toggleClass( "crossout" );
		$('#menu').toggleClass( "show" );});
		$("#me_href").click(function(){	
		$('.sp1').toggleClass( "crossin" );
		$('.sp2').toggleClass( "crosshide" );
		$('.sp3').toggleClass( "crossout" );
		$('#menu').toggleClass( "show" );});
	</script>
	<div class="container-fluid">
		<div class="row">
			<!--Start Main-->
		<?php include "Views/".$content.".php";?>		
		<!--End Main-->
</div>
</div>
</div>

</body>
</html>