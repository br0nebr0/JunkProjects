<?php 
 $project=new Projects;
 $project->post();
 ?>
 <div class="form-group col-md-4 col-md-offset-1">
<form  method="POST" class="Add-form" enctype="multipart/form-data">
<select id="Type"  name="Project_type">
  <option value="">Выберите тип проекта</option>
  <option value="php">PHP</option>
  <option value="psd">PSD</option>
  <option value="html">HTML</option>
</select>
<label for="Project" class="text-left" style="padding:5px; font-size:12pt">Выберите .zip архив или .psd файл</label>
<input id="Project" class="hidden" type="file" name="project">
<label for="Image" class="text-left" style="padding:5px; font-size:12pt">Выберите изображение</label>
<input id="Image" class="hidden" type="file" name="image">
<textarea  id="Text" type="text"  name="text" placeholder="Опишите проект, инструменты и подходы"></textarea><br>
<div class="col-md-6">
<input class="form-control btn btn-primary" type="submit" name="add" value="Добавить"></div>
</form>
<div class="col-md-6"><button class="form-control btn btn-primary" onclick="preview()">Просмотр</button></div>

</div>


<div class="col-md-5">
	<div class="frame">
		<div class="img">
			<img id="NImage" src="https://images.unsplash.com/photo-1422004707501-e8dad229e17a?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=f1cd6d15b82e723511ababedce1c7625&w=1000&q=80"  height=100%>
		<div class="hid">
		<div class="title-overlay">
			<div class="col-md-12 text-center">
			<h1 id="Title">Template0</h1> </div>
			<div class="col-xs-6 col-sm-6 col-md-6 text-left side-info"><h3><?=date("Y-m-d")?></h3></div>
			<div class="col-xs-6 col-sm-6 col-md-6 text-right side-info"><h3  id="NType">Html</h3></div>
		</div>	</div>
		<div class="hid">
		<div class="overlay"><p id="NText">			
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, maxime?</p>
	<div class="col-md-12 bt-grp">
		<?=$project->show_buttons("html","test")?>
	</div>
		</div>
		</div>
		</div >
		<div class="legend">
		<div  class="col-md-12"></div>
		<div id="NType" class="col-xs-6 col-sm-6 col-md-6 text-left">Html</div>
		<h5><div class="col-xs-6 col-sm-6 col-md-6 text-right"><?=date("Y-m-d")?></div></h5>
		</div>
	</div>
	
	
</div>
<script>
	function preview (){
	$(document).ready (function () { 
		var Type= $("#Type").val();
		var Text= $("#Text").val();
		var Project=$("#Project").val();
		// var Image=$("#Image").val();
		// alert(Image);
		
		Project=Project.split('\\');
		Project=Project[Project.length-1];
		Project=Project.split('.');
		// $('#NImage').attr('src', Image);
		$("#NText").text(Text);
		$("#NType").text(Type);
		$("#Title").text(Project[0]);

}); }
	function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#NImage').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
$("#Image").change(function(){
    readURL(this);
});
</script>