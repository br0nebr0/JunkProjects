<?php if (class_exists("Users")) {
	$var=new Users;
$var->get_hash();
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	 <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
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
<div class="side">
	<a href="/main/index" class="logo"><img src="/img/logo.png"  alt=""></a>
	<span class="divide"></span>
	<ul class="nav">
		<a href="/Admin"><li><i class="fa fa-code"></i><span class="tip">Projects</span></li></a>
		<a href="/Admin/Versions"><li><i class="fa fa-server"></i><span class="tip">Versions</span></li></a>
		<a href="/Admin/Add"><li><i class="fa fa-plus"></i><span class="tip">Add Project</span></li></a>
		<a href="/Admin/Patch"><li><i class="fa fa-clipboard"></i><span class="tip">Add Version</span></li></a>
	
	<span class="divide"></span>
	<a href="/Admin/Quit"><li><i class="fa fa-arrow-left"></i><span class="tip">Quit</span></li></a>

	</ul>
</div>
<div class="main">
	<div class="container-fluid">
		<div class="row">
			<!--Start Main-->
		<div class="main-block-admin col-md-12">


		<?php include "Views/".$content.".php";?>



				
		</div>
		<!--End Main-->
</div>

</div>
	</div>
</body>
</html>