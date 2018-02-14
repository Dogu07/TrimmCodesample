<?php
$kaarten = array("schoppen_" , "ruiten_" , "harten_" , "klaveren_" );
$waarden = array(1 , 2 , 3 , 4 , 5 ,6 , 7 , 8 ,9 , 10 , "boer" , "heer" , "vrouw" );

$random1 = $kaarten[rand(0,3)];
$random2 = $waarden[rand(0,12)];
echo <<<hallo
<img src="../kaarten/$random1$random2.svg" alt="kaarten">
hallo;
