<?php
if ($_GET['id']){
$buyId=$_GET['id'];
$mdl=mysqli_query($myConnect,"select * from `phone` WHERE id=$buyId ");
while ($mdBuy=mysqli_fetch_array($mdl)){
echo "
<div class='trueBuy'>
<div class='modBuyinfo'>
<img src='img/".$mdBuy['image']."' height=250px><br>

</div>
<div class='modBuyForm'>
<form method='POST' action='routes.php' >
<textarea class=hidden name='name'>".$mdBuy['name']."</textarea>
<br>Цена:".$mdBuy['price']." руб.<br>
Количество:
<input type='hidden' name='price' value=".$mdBuy['price']." >
<input name='count' value=1 id='count'> Шт.
</div>
<div class='modBuybutt'>

<label>
<input type='submit' name='action_basket' class=hidden value='basket'>
<div class='buy_mod' >Корзина</div> </label>


<label>
<input type='submit' name='action_menu' class='hidden' value='menu'>
<div class='back'>Добавить</div></label> </form>
</div>
</div>
";}}

?>
