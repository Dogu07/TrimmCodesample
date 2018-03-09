<?php
$kaarten = array("schoppen_" , "ruiten_" , "harten_" , "klaveren_" );
$waarden = array(1 , 2 , 3 , 4 , 5 ,6 , 7 , 8 ,9 , 10 , "boer" , "heer" , "vrouw" );
$array = array();


for ($xz =0; $xz <=4; $xz++) {
    $random1 = $kaarten[rand(0, 3)];
    $random2 = $waarden[rand(0, 12)];
    array_push($array, $random1 . $random2);
}

$kaarten = array_unique($array);
sort($kaarten);

for ($zx =0; $zx <=4; $zx++) {
    echo <<<hallo
    <img src="../kaarten/$kaarten[$zx].svg" alt="kaart">
hallo;
}
