<?php
$boeken = array(
    array("title"=> "Stoner",
        "auteur" => "john williams",
        "genre" => "fictie",
        "prijs" => 19.99),

    array("title"=> "De cirkel",
        "auteur" => "Dave Eggers",
        "genre" => "fictie",
        "prijs" => 22.50),

    array("title"=> "Rayuela",
        "auteur" => "julio Cortazar",
        "genre" => "fictie",
        "prijs" => 25.50),
);

function lab04($boeken) {
    echo $boeken[0]["prijs"];
    echo "</br>";
    echo $boeken[1]["prijs"];
    echo "</br>";
    echo $boeken[2]["prijs"];

}

lab04($boeken); // call the function
