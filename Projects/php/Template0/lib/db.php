<?php
include 'filter.php';
include 'dbconnect.php';

$qwer=mysqli_query($myConnect,"select * from `phone` ".$where."");
while ($arr=mysqli_fetch_array($qwer))
{	echo " <div class='stock'>";
if ($arr['MAC']==1){echo"  <img src='img/scan.png' class='scan'>";}
echo "<div class=prod><a href=?idd=".$arr['id']."><img src='img/".$arr['image']."' height=300px></a></div>
<a href=?idd=".$arr['id'].">".$arr['name']."</a>
<p>".$arr['price']." руб. </p><a href=?id=".$arr['id'].">
<div class='buy' >купить</div></a>
</div> ";
}

?></div>
