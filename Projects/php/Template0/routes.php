<?php
include 'lib/title.php';

 ?>
<div id='content'>
<aside>
<?php
include "lib/sendfilter.php";
 ?>
<img src='img/ad1.jpg'><br>
<img src='img/ad.jpg'>
</aside>
<?php
 include 'lib/db.php';
 include 'lib/modal.php';
 include 'lib/modalBuy.php';
?>


<!--</div> -->
<div style="clear: both;">
</div>
<?php
mysqli_close($myConnect);
 include 'lib/foot.php';
 ?>
