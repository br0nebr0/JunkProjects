<div id="preloader">
	<div class="loader">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
</div>
	<h1>Загрузка</h1>
</div>

<div class="col-md-12 header">
	<h1 class="col-md-12 text-center Title">JunkProjects</h1>
	<b class="col-md-12 text-center sub-title">от посредственности к специалисту</b>		
</div>
<div class="col-md-12 stuff">
	<h1 class="col-md-12 text-center" style="margin:0 10px 10px 10px">Чем я занимаюсь</h1>
<div class="col-sm-8 col-md-4 ">
	<div class="stick-title">Верстка сайтов</div>
	<div class="stick">
	<span>Направление:</span>
	<ul>
		<li>Адаптивная верстка</li>
		<li>Верстка под WordPress</li>
		<li>Верстка из PSD</li>
	</ul>
	<span>Технологии:</span>
	<ul>
		<li>Bootstrap</li>
		<li>CSS3</li>
		<li>Jquery</li>
		<li>Flex CSS</li>
	</ul>
	</div>
</div>
<div class="col-sm-8 col-md-4">
	<div class="stick-title">PHP разработка</div>
	<div class="stick">
	<span>Направление:</span>
	<ul>
		<li>Доработка модулей</li>
		<li>Разработка CMS</li>
		<li>Написание скриптов</li>
	</ul>
	<span>Технологии:</span>
	<ul>
		<li>PHP 5.6 / 7.1</li>
		<li>Yii 2</li>
		<li>Mysqli</li>
		<li>Laravel</li>
	</ul>	
	</div>
</div>
<div style="clear: both;"></div>
</div>
<div class="col-md-12 divide"></div>

<div class="col-md-12 projects" >
	<h1 class="col-md-12 text-center">Мои работы</h1>
	<?php  $result=new Projects;
	$projects=$result->get_min();
	while($project=mysqli_fetch_array($projects))
	{ $img ="/Projects/".$project['name']."/".$project['Title']."/".$project['image'];
	  $href = "/Projects/".$project['name']."/".$project['Title']."/index.html"?>
	<div class="col-md-4">
		<a href="<?=$href?>" target='_blank'><div class="land_frame">
		<img src="<?=$img?>" alt="">
		</div></a>
		<h3 class="text-center land_title"><?=$project['Title']?></h3>
		<p class="text-center land_text"><?=$project['text']?></p>	
	</div>
	<div class="col-md-4"></div>
	<div class="col-md-4"></div>	



<?php } ?>
<div class="text-center col-md-6 col-md-offset-6">
<a class="btn form-control login-btn " href="/main/Projects">Больше работ</a></div>		
</div>

<div id="me" class="col-md-12 about">
	<h1 class="col-md-12 text-center">Обо мне</h1>
	<div class="photo">
		<img src="/img/me.jpg" alt="мое фото">
	</div>
	<p>
	Меня зовут Андрей, мне 20 лет
	С 14 лет увлекся веб-разработкой
	в свободное время постоянно учил что-то новое.
	На данный момент я студент и ищу место, где бы я
	мог применить свои навыки и улучшать их.
	</p>

	<h2 class="col-md-12 text-center">Обратная связь</h2>
	<form action="" class="contact-form">
		<div class="col-md-4">
	<input class="" type="text" name="name" placeholder="Имя*">
	<input class="" type="text" name="email" placeholder="e-mail*">
	</div>
	<div class="col-md-4">
	<textarea class=""  type="text"  name="text" placeholder="Ваше сообщение"></textarea>
	<input class="btn login-btn" type="submit" name="send" value="Отправить">
	</div>
	</form>

	<div style="clear: both;"></div>

</div>
<div class="col-md-12 paper4">
	<div><a href="/">JunkProjects</a> 2018</div>
	
	<div><a href="//vk.com/br0nebr0"><i class="fa fa-vk"></i></a> | <i class="fa fa-envelope"></i> : <a href="mailto:grechihin.andrey@gmail.com">grechihin.andrey@gmail.com</a>
	</div>
</div>
<script>
	$(document).ready(loader());
	function loader(){
	setTimeout ( function (){
	$('#preloader').addClass("hide")},
	4000);
	}
</script>