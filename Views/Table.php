<table class="admin-table" border=1 width="100%">
<tr height="30px">
	<th>Type</th>
	<th>Image</th>
	<th>Name</th>
	<th>Text</th>
	<th>Create</th>
	<th>Options</th>
</tr>
<?php $result=new Projects;
 $result->post();
$projects=$result->get();
while($project=mysqli_fetch_array($projects)) {
	?><tr>
		<td width=8% class="text-center"><h1><?=$project["name"]?></h1></td>
		<td width=14% height="148px"><img src="/Projects/<?=$project['name']?>/<?=$project['Title']?>/<?=$project['image']?>"  height="100%"></td>
		<td width="12%" class="text-center"><?=$project['Title']?></td>
		<form method="POST">
		<input type='hidden' name='id' value='<?=$project[0	]?>'>
		<td> <textarea name="text" id="text"><?=$project['text']?></textarea></td>
		<td width="7.5%"><input type="date" name="date" value="<?=$project['date']?>"></td>
		<td width="5.5%"><input class="sel btn" type="submit" name="Change" value="Change">
	</form>

	<form method="POST">
		<input type='hidden' name='id' value='<?=$project[0	]?>'>
		<input type='hidden' name='tag' value='<?=$project['name']?>'>
		<input type='hidden' name='name' value='<?=$project['Title']?>'>
		<input class="sel btn btn-danger" type="submit" name="Delete" value="Delete">	
		</form></td>
</tr>
<?php }
 unset($projects);
?>
</table>