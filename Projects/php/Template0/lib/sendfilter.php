<div id='filter'>
<form method="POST" action="routes.php">
Цена <br>
от <input name='MinPrice' value=4000> до <input name='MaxPrice' value=100000> <br>
<br>
Бренд:<br>
<label><input type='radio' name='brand' value='tplink'>TP-LINK<br></label>
<label><input type='radio'name='brand' value='dlink'>D-LINK<br></label>
<label><input type='radio'name='brand' value='asus'>ASUS<br></label>
<label><input type='radio'name='brand' value='tenda'>TENDA<br></label>
<br>Количество антенн<br>
<label><input type='radio' name='ant' value=1>1 антенна<br></label>
<label><input type='radio' name='ant' value=2>2 антенны<br></label>
<label><input type='radio' name='ant' value=3>3 антенны<br></label>
<label><input type='radio' name='ant' value=4>4 антенны<br></label>
<br>Фильтрация MAC-адресов:<br></label>
<label><input type='radio' name='scan' value=1>да<br></label>
<label><input type='radio' name='scan' value=0>нет<br></label>
<br>Максимальная скорость беспроводного соединения:<br>
<label><input type='radio' name='speed' value=200 >200 МБ/с<br></label>
<label><input type='radio' name='speed' value=300>300 МБ/с<br></label>
<label><input type='radio' name='speed' value=400>400 МБ/с<br></label>
<br>Количество LAN портов (RJ-45):<br>
<label><input type='radio' name='LAN' value=2>2<br></label>
<label><input type='radio' name='LAN' value=3>3<br></label>
<label><input type='radio' name='LAN' value=4>4<br></label>
<label><input type='radio'name='LAN' value=5>5<br></label>
<label><input type='radio'name='LAN' value=6>6<br></label>
<label><input type='radio'name='LAN' value=7>7<br></label>
<label><input type='radio'name='LAN' value=8>8<br></label>
<label><input type='submit' name='submit' value='Применить' id='go'>
</form>
</div>
