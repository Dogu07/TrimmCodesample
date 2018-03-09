<?php
$worpen = 0;
$dice1 = rand(1,6);
$dice2 = rand(1,6);
$dice3 = rand(1,6);
$dice4 = rand(1,6);
$dice5 = rand(1,6);
$totaal = $dice1 + $dice2 + $dice3 + $dice4 + $dice5;
$array = array (1 , 2 , 3 ,4 ,5 ,6);

while ($dice1 != $dice2 || $dice1 != $dice3 || $dice1 != $dice4 || $dice1 != $dice5){
    $dice1 = rand(1,6);
    $dice2 = rand(1,6);
    $dice3 = rand(1,6);
    $dice4 = rand(1,6);
    $dice5 = rand(1,6);
    $totaal = $totaal + $dice1 + $dice2 + $dice3 + $dice4 + $dice5;
    $worpen++;
};
$gemiddelde = $totaal / $worpen;


echo <<<Uitslag
<br>
$dice1<br>
$dice2<br>
$dice3<br>
$dice4<br>
$dice5<br>
<br>

<h1>Totaal worpen : $worpen</h1><br>
<h1>Gemiddelde Totaal worpen: $gemiddelde</h1><br>

</form>
Uitslag;


