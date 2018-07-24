<?php
include 'lib/title.php';
if($_POST){
  include 'lib/dbconnect.php';
  $mod=$_POST['brand'];
  $name=$_POST['name'];
  $price=$_POST['price'];
  $sim=$_POST['sim'];
  $scan=$_POST['scan'];
  $scr=$_POST['screen'];
  $cam=$_POST['camera'];
  $prop=$_POST['prop'];
  if($_FILES)
    {
    $uploaddir="img/";
    $img=$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], $uploaddir .	$_FILES['image']['name']);
    }
  mysqli_query($myConnect,"INSERT INTO `phone` (`mod`, `name`, `price`, `ant`, `MAC`, `speed`, `LAN`, `prop`, `image`) VALUES
  ('$mod', '$name', $price, $sim, $scan, '$scr', $cam,'$prop','$img');");
  mysqli_close($myConnect);
header('Location:http://I-Mart.com/form.php');
}

 ?>
<div id='content'>

<form action='form.php'  method='POST' enctype="multipart/form-data">
  <input type="hidden" name="MAX_FILE_SIZE" value="131072" />
<table width="80%" cellspacing="0" >
<tr><td>Бренд</td><td><select name='brand' id="addBrand">
  <option value='tplink'>TP-LINK</option>
  <option value='dlink'>D-LINK</option>
   <option value='asus'>ASUS</option>
    <option value='tenda'>TENDA</option>
</select></td></tr>
<tr><td>Модель</td><td><input name='name'></td></tr>
<tr><td>Изображение</td><td><input type='file' name='image'></td></tr>
<tr><td>Цена</td><td><input name='price'></td></tr>
<tr><td>Количество антенн</td><td><select name='sim'>
  <option value=1>1</option>
  <option value=2>2</option>
  <option value=3>3</option>
  <option value=4>4</option>
</select></td></tr>
<tr><td>Сканер отпечатка</td><td><select name='scan'>
  <option value=1>Да</option>
  <option value=0>нет</option>
</select></td></tr>
<tr><td>Экран</td><td><select  name='screen'>
  <option value='M'>M</option>
  <option value='L'>L</option>
  <option value='XL'>XL</option>
</select></td></tr>
<tr><td>Камера</td><td><select  name='camera'>
  <option value=5>5</option>
  <option value=8>8</option>
    <option value=12>12</option>
  <option value=13>13</option>
    <option value=16>16</option>
  <option value=20>20</option>
</select</td></tr>
<tr><td>Описание</td><td><textarea name='prop'></textarea></td></tr>
</table>
<br>
<table width="80%" cellspacing="0">
<tr><td><input type='submit' name='submit' value='Добавить'id="add"></td></tr>
</table>
</form>
</div>

<?php
include 'lib/foot.php';

 ?>
