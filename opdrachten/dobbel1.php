<?php
$dice1 = rand(1,6);
$dice2 = rand(1,6);
$dice3 = rand(1,6);
$dice4 = rand(1,6);
$dice5 = rand(1,6);
$dice6 = rand(1,6);
$totaal = $dice1 + $dice2 + $dice3 + $dice4 + $dice5 +$dice6;
$array = array (1 , 2 , 3 ,4 ,5 ,6);

echo <<<Uitslag
<form> <button onclick="$dice1; $dice2; $dice3; $dice4; $dice5;$dice6">Gooien</button><br>
$dice1<br>
$dice2<br>
$dice3<br>
$dice4<br>
$dice5<br>
$dice6<br>
<br>

<h1>Totaal: $totaal</h1><br>

</form>
Uitslag;


