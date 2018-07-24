<div class="col-md-12 text-center"><h1>PROJECTS</h1></div>
<div class="main-block col-md-12">
	<ul class="col-md-12">
	 <a href="/main/Projects/1"><button type="button" class="btn btn-filter">All</button></a>
  <a href="/main/Projects/1/psd"><button type="button" class=" btn btn-filter">PSD</button></a>
  <a href="/main/Projects/1/Html"><button type="button" class="btn btn-filter">HTML</button></a>
  <a href="/main/Projects/1/PHP"><button type="button" class=" btn btn-filter">PHP</button></a>
</ul>

<?php $result=new Projects;
$projects=$result->get();
while($project=mysqli_fetch_array($projects)) {
	$img ="/Projects/".$project['name']."/".$project['Title']."/".$project['image'];
	?>


	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-3">
	<div class="frame">
		<div class="img">
		<img src="<?=$img?>"  height=100%>
	</div>
		<div class="hid">
		<div class="title-overlay">
				<div class="col-md-12 text-center">
			<h1><?=$project['Title']?></h1>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 text-left side-info"><h3><?=$project['date']?></h3></div>
		<div class="col-xs-6 col-sm-6 col-md-6 text-right side-info"><h3><?=$project["name"]?></h3></div>
		
		
		</div></div>
		<div class="hid">
		<div class="overlay">
			<p>
			<?=$project['text']?>
			</p>
	<div class="col-md-12 bt-grp">
		<?=$result->show_buttons($project['name'],$project['Title'])?>
	</div>
		</div></div>

		
		<div class="legend">
		<div class="col-md-12"></div>
		<div class="col-xs-6 col-sm-6 col-md-6 text-left"></div>
		<h5><div class="col-xs-6 col-sm-6 col-md-6 text-right"></div></h5>
		</div></div>
</div>

<?php }
 unset($projects);?>
 <div class="col-md-12 text-center pages">
 <?php
 $pages=new Pagination($result->pages());
?>
</div>
</div>