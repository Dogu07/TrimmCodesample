<!DOCTYPE html>
<html>
<body>

<?php
$info = array(
    array(
    'Clubnaam : ' => "Fc Twente",
    'stad : ' => "Enschede",
    'gespeeld : ' => 22,
    'gewonnen : ' => 4,
    'gelijk : ' => 6,
    'veloren : ' => 14),
    array(
        'Clubnaam : ' => "Heracles Almelo",
        'stad : ' => "Almelo",
        'gespeeld : ' => 22,
        'gewonnen : ' => 4,
        'gelijk : ' => 6,
        'veloren : ' => 10));

$twente = $info[0];
$heracles = $info[1];

echo'<img src="http://voetbalstats.nl/clublogo/clublogo40.png" height="200"';
echo"<br>";
echo'<img src="https://www.heracles.nl/Common/images/heracles-logo.png" height="200"';
echo "<br />";

echo "<br />";
    foreach ($twente as $var) {
        echo array_search($var, $twente) . " " . $var . " <br>";
    }
    echo "<br>";
    foreach ($heracles as $var) {
        echo array_search($var, $heracles) . " " . $var . " <br>";

    }
?>

</body>
</html>