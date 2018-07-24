<?php
include 'lib/title.php';
include 'lib/dbconnect.php';
if ($_SESSION['buy']==1) {
$_SESSION['buy']=0;
echo "
<script>
alert('Заказ добавлен в обработку');
</script>
";
}
?>
<div id=content>

<div class='order'>

<table width=100% cellspacing='0' border='1'>
<tr><th>Наименование</th><th>Кол-во</th><th>Цена</th><th>Сумма</th><th>Удалить</th></tr>
<form action='lib/basketScript.php' method='POST'>
<?php
$i=0;
foreach ($_SESSION['arr'] as $array) {
$stack.=$array."<br>";
$arr=explode("_", $array);
$arr[2]=$arr[2]-1;
$sum=$arr[1]*$arr[2];
if ($arr[0]!=''){
echo "<tr><td>$arr[0]</td><td>$arr[1]</td><td>$arr[2]</td><td>$sum</td><td>
<input type=checkbox name=".$i." value='on'>

</td></tr>";
$i++;}}
echo "<textarea class='hidden' name='stack' >$stack</textarea>";
echo"<input type='hidden' name='count' value=$i >";
?>
</table>
<label><input type='submit' name='deleteAll' class=hidden>
<div class=ref_left>Очистить корзину</div></label>
<label>
<input type='submit' name='add' class=hidden >
<div class=ref>Заказать</div></label>
<label> <input type="submit" class=hidden name="delete">
<div class=ref>Удалить</div></label>
</form>
</div>




<div class='user adminForm'>
<?php
if ($_GET['action']=='change'){
  echo" <form method='POST' action='basket.php'>
  <input type='text' name='FIO'  placeholder='ФИО'><br>
  <input type='text' name='adr'  placeholder='Адрес'><br>
  <input type='text' name='phone'  placeholder='Телефон'><br>
  <input type='submit' value='Изменить'>
  </form>";} else{
if ($_POST){
$_SESSION['FIO']=$_POST['FIO'];
$_SESSION['adr']=$_POST['adr'];
$_SESSION['phone']=$_POST['phone'];
}
 if ($_SESSION['FIO']) {
  echo "Имя:<br>".$_SESSION['FIO']."<br>";
  echo "Адрес:<br>".$_SESSION['adr']."<br>";
  echo "Телефон:<br>".$_SESSION['phone']."<br>";
  echo"<a href=basket.php?action=change>Изменить данные</a>";
} else
{
echo" <form method='POST' action='basket.php'>
<input type='text' name='FIO'  placeholder='ФИО'><br>
<input type='text' name='adr'  placeholder='Адрес'><br>
<input type='text' name='phone'  placeholder='Телефон'><br>
<input type='submit' value='Внести'>
</form>";}}


?>
</div>

</div>
<div style="clear: both;"></div>
<?php
include 'lib/foot.php';
 ?>
