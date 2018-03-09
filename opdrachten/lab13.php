<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Mijn muziek</title>
    <meta name="description" content="" />
    <meta http-equiv="content-type" charset="UTF-8"/>
    <meta name="keywords" content="" />


</head>
<body>
<h3>Voorbeeld van de foreach-lus</h3>
<?php
$kleuren["oranje"] = "orange";
$kleuren["rood"] = "red";
$kleuren["paars"] = "violet";
$kleuren["groen"] = "green";
$kleuren["blauw"] = "blue";
$kleuren["geel"] = "yellow";
foreach ($kleuren as $kleur)
{
    echo "<br><font color='$kleur'>Deze kleur in $kleur</font>";
}
?>
</body>
</html>