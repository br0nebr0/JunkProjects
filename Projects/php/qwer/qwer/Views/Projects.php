<?php $res=new Projects;
$result=$res->get();
while($arr=mysqli_fetch_array($result)) {
	?>
	<div class="col-md-6">
		<div class="col-md-12 text-center"><div class="col-md-4"><?=$arr[7]?></div>
		<div class="col-md-4"><?=$arr[2]?></div>
		<div class="col-md-4"><?=$arr[3]?></div>
	</div>
	<img src="/Projects/<?=$arr[2]?>/<?=$arr[4]?>"  width=100%>
	<?=$arr[5]?>



</div>

<?php }
 unset($res); ?>