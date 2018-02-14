<?php
$info = array(array(
    'Naam' => "Bas",
    'Achternaam' => "Leliefeld",
    'Leeftijd' => "18",
    'Woonplaats' => "Borne",
    'Studentnummer' => "0289351"),
array(
    'Naam' => "Rami",
    'Achternaam' => "Ramadan",
    'Leeftijd' => "19",
    'Woonplaats' => "Vroomshoop",
    'Studentnummer' => "0289351"),
array(
    'Naam' => "Kevin",
    'Achternaam' => "Nijkamp",
    'Leeftijd' => "17",
    'Woonplaats' => "Rijssen",
    'Studentnummer' => "0289351"),


    array(
    'Naam' => "Renzo",
    'Achternaam' => "Gerritzen",
    'Leeftijd' => "17",
    'Woonplaats' => "Losser",
    'Studentnummer' => "0289351"),


    array(
    'Naam' => "Sanne",
    'Achternaam' => "Moerdijk",
    'Leeftijd' => "17",
    'Woonplaats' => "Oldenzaal",
    'Studentnummer' => "0289351"),


    array(
    'Naam' => "Hans",
    'Achternaam'=> "Muns",
    'Leeftijd'=> "16",
    'woonplaats'=> "Borculo",
    'Studentnummer'=> "0289351"),

    array(
    'Naam'=> "Dogukan",
    'Achternaam'=>"Ozturk",
    'Leeftijd'=>"16",
    'woonplaats'=>"Losser",
    'studentnummer'=>"0289351"));



$persoon = $info[rand(0,6)];
$bas = $info[0];
$Rami = $info[1];
$Kevin = $info[2];
$Renzo = $info[3];
$Sanne = $info[4];
$Hans = $info[5];
$Dogukan = $info[6];

foreach ($persoon as $var) {
    echo $var . " ";
}



