<?php
$id=$_GET['idd'];
$class='ModalViewOff';
if ($id!='') {
$class='ModalViewOn';
}

echo "<div class=$class>";
$mdl=mysqli_query($myConnect,"select * from `phone` WHERE id=$id ");
while ($modal=mysqli_fetch_array($mdl)){
echo "<div class='prod_mod'><img src='img/".$modal['image']."' height=400px></div>
<a href='routes.php'><div class='close'>X</div></a>
	<div class='tags'>"
	.$modal['mod']."<br>"
	.$modal['name']."<br>"
	.$modal['price']." руб.<br>
	Количество Антенн: ".$modal['ant']."<br>
	Скорость WAN: ".$modal['speed']." Мб/сек<br>
	Количество LAN :".$modal['LAN']." <br>";
	if ($modal['MAC']==1) {echo "Фильтрация MAC: ДА <br>";
	}
	else {
	echo "Фильтрация MAC: НЕТ <br>";
	}

	echo "</div>
		<div class='proper'>".$modal['prop']."</div>
		<a href='routes.php'><div class='back'>Назад</div></a>";

	if ($_SESSION['admin']==true) {echo "
<center><a href=change.php?id=".$modal['id'].">Редактировать</a><br/>
		<a href=delete.php?id=".$modal['id'].">удалить</a>
</center>";}
echo"
<a href=?id=".$id."><div class='buy_mod' >купить</div></a>
</div>";

}?>
</div>
