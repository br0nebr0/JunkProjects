<h1 class="text-center">Development Diary</h1>
<div class="col-md-8 col-md-offset-1 Patches">
<?php
$result=new Diary;
$Diary=$result->get();
 while($Patch=mysqli_fetch_array($Diary)) {?>
 <div class="patch">
 <h2 id="<?=$Patch['version']?>"><?=$Patch['version']?> | <?=$Patch['date']?> <a href="#"><i class="fa fa-caret-down"></i></a></h2>
 <div class="col-md-12 divide"></div>
 <div class="col-md-12">
 <h3 class="text-left">Что нового:</h3>
 <?=$Patch['Patch_note']?>
 </div>
 <div class="col-md-12">
 <h3 class="text-left">В процессе:</h3>
 <?=$Patch['Features']?>
 </div>
 <div class="col-md-12 divide"></div>
 </div>
<?php } unset($Diary);?>
 </div>