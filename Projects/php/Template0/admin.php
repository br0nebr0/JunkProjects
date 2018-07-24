<?php
include "lib/title.php";
include "lib/dbconnect.php";
 ?>
<div id='content'>
<?php
unset($_SESSION['arr']);
if ($_SESSION['admin']!=true){
echo"
<div class='adminForm'>
<form method='POST' action='access.php'>
<input name='login' placeholder='Логин' >
<input name='password' placeholder='Пароль' type='password'>
<input type='submit' value='Войти'>
</form></div>";}
else {
  echo"
<div class='adminPanel'>
<div class='logout'><p id='welcome'>
WELCOME, admin</p>
<a href='stop.php' id='stop'>Logout</a>
</div>
<div class='ordList'>
<table сlass='ordTable' cellspacing='0' border='1' width=100%>
<tr><th>№</th><th>id товаров</th><th>Контактные данные</th><th>Статус</th></tr>";
  $qwer=mysqli_query($myConnect,"select * from `ord`");
  echo "<form action='lib/adminr.php' method='POST'>";
  $rows = mysqli_num_rows($qwer);
  echo "<input type='hidden' name='row' value='$rows'></input>";
  while ($arr=mysqli_fetch_array($qwer)){
echo"
<tr><td>".$arr['id']."</td><td>".$arr['prod']."</td><td>".$arr['FIO'].";<br>".$arr['adr']." ;<br>".$arr['num']."</td><td>
  <select name='status".$arr['id']."'>
  <option value='wait'";
  if ($arr['status']=='wait'){echo "selected";}
  echo">Ожидание</option>
  <option value='process'";
  if ($arr['status']=='process'){echo "selected";}
  echo">Обработка</option>
  <option value='done'";
if ($arr['status']=='done'){echo "selected";}
  echo">Завершен</option>
  <option value='cancel'";
  if ($arr['status']=='cancel'){echo "selected";}
  echo ">Анулирован</option> </select>
</td></tr>";}

echo"</table><input type='submit' class='ref' value ='Обновить'>  </form>
</div>";
}

?>
</div>
 <?php include "lib/foot.php" ?>
