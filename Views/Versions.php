<table class="admin-table" border=1 width="100%">
<tr height="30px">
	<th>version</th>
	<th>Patch</th>
	<th>Planed</th>
	<th>Date</th>
	<th>Options</th>
</tr>
<?php $result=new Diary;
 $result->post();
$projects=$result->get();
while($project=mysqli_fetch_array($projects)) {
	?><tr>
		<td width=12% class="text-center"><b><?=$project["version"]?></b></td>
		<form method="POST">
		<td width="30%" class="text-center"><textarea name="Patch"><?=$project['Patch_note']?></textarea></td>
		<input type='hidden' name='id' value='<?=$project[0	]?>'>
		<td width="30%"> <textarea name="Planed" id="text"><?=$project['Features']?></textarea></td>
		<td width="7.5%"><input type="date" name="date" value="<?=$project['date']?>"></td>
		<td width="5.5%"><input class="sel btn btn-primary" type="submit" name="Change" value="Change">
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