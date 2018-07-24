<?php


include 'lib/title.php';
include 'lib/dbconnect.php';

if($_POST){
    $id=$_POST['id'];
  $mod=$_POST['mod'];
  $name=$_POST['name'];
  $price=$_POST['price'];
  $sim=$_POST['sim'];
  $scan=$_POST['scan'];
  $scr=$_POST['scr'];
  $cam=$_POST['cam'];
  $prop=$_POST['prop'];
  if($_FILES)
    {
    $uploaddir="img/";
    $img=$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], $uploaddir .	$_FILES['image']['name']);
        }
    if ($img!=''){
      $sql = "UPDATE `phone` SET `mod`='$mod', `name`='$name', `price`='$price', `ant`='$sim', `MAC`='$scan', `speed`='$scr', `LAN`='$cam', `prop`='$prop' , `image`='$img' WHERE `id`='$id'";
    }
    else {
    $sql = "UPDATE `phone` SET `mod`='$mod', `name`='$name', `price`='$price', `ant`='$sim', `MAC`='$scan', `speed`='$scr', `LAN`='$cam', `prop`='$prop'  WHERE `id`='$id'";}
    mysqli_query($myConnect ,$sql );
  mysqli_close($myConnect);
header('Location:http://I-Mart.com/routes.php');
exit;
}
if ($_GET){
$id=$_GET['id'];
$mdl=mysqli_query($myConnect,"select * from `phone` where id=$id ");
echo "<div id=content>";
while ($mol=mysqli_fetch_array($mdl)){
echo"
<form action='change.php'  method='POST' enctype='multipart/form-data'>
<input type='hidden' name='MAX_FILE_SIZE' value='131072' />
<table width='80%' cellspacing='0' border='1'>
<tr><th>Поле</th><th>Значение</th></tr>
<tr><td>ID</td><td><input name='id' value='".$mol['id']."' ></input></td></tr>
<tr><td>Бренд</td><td><input name='mod' value='".$mol['mod']."' ></input></td></tr>
<tr><td>Модель</td><td><input name='name' value='".$mol['name']."' ></input></td></tr>
<tr><td>Изображение</td><td><input type='file' name='image' ></td></tr>
<tr><td>Цена</td><td><input name='price' value='".$mol['price']."'></input></td></tr>
<tr><td>Сим-карта</td><td><input name='sim' value='".$mol['ant']."'></input></td></tr>
<tr><td>сканер</td><td><input name='scan' value='".$mol['MAC']."'></input></td></tr>
<tr><td>Экран</td><td><input name='scr' value='".$mol['speed']."'></input></td></tr>
<tr><td>Камера</td><td><input name='cam' value='".$mol['LAN']."'></input></td></tr>
<tr><td>Описание</td><td><textarea name='prop'>".$mol['prop']."</textarea></td></tr>
</table>
<table width='80%' cellspacing='0' border='1'>
<td><input type=submit value='обновить'></td></tr>
</table>
";}}


echo "</div>";

include 'lib/foot.php';


?>
