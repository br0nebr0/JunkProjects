<?php 
 $patch=new Diary;
 $patch->post();
 ?>
<div class="col-md-5 col-md-offset-2">
<form  method="POST" class="Add-form">
<input class="form-control" type="text" name="version" placeholder="Версия патча">
<textarea style="height:200px" class="form-control" type="text"  name="Patch" placeholder="Новый функционал"></textarea>
<textarea style="height:200px" class="form-control" type="text"  name="FPatch" placeholder="Планируемый функционал"></textarea><br>
<div class="col-md-6">
<input class="form-control btn-form btn btn-primary" type="submit" name="add" value="Добавить"></div>
</form>
</div>