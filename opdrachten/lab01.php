<!DOCTYPE HTML>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Lab-01</title>
</head>
<body>
<?php
$breedte = 10;
$lengte = 11;
$hoogte = 5;
$oppervlakte = $lengte * $breedte;
$volume = $lengte * $breedte * $hoogte;

echo <<<Berekening
<p>Containeroppervlakte : $oppervlakte</p>
<p>ContainerVolume : $volume</p>
Berekening;

?>
</body>
</html>