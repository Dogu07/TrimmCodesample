<?php

$playlist = array (
    array("genre" => "hiphop"	, "auteur" => "john williams"	, "titel" => "my girl"),
    array("genre" => "jazz"	, "auteur" => "john coltrane"	, "titel" => "new york"),
    array("genre" => "hiphop"	, "auteur" => "shakira"	, "titel" => "obsession"),
    array("genre" => "Latin"	, "auteur" => "Ceatano Velosso", "titel" => "Cafe Atlantico")
);

foreach ($playlist as $PL){
    foreach ($PL as $PLPL){
        echo array_search($PLPL , $PL) . ': ' . $PLPL . "<br>";
    }
}

function printtracks($item, $key){
    echo "<br>track $key" . ": " . $item['genre'] . '|' . $item['auteur'] . '|' . $item['titel'];
}

echo array_walk($playlist, "printtracks");

