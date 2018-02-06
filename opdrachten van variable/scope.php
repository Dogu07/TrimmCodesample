<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
echo <<<TEKST
<h2> Local variable </h2>
<br> Local variable kun je alleen gebruiken bij het functie waar die bij hoort <br />

<h2>Global variable</h2>
<br> Globale variable kun je overal in het pagina gebruiken (alle functies)<br />
TEKST;
?>
<h1> Global variable</h1>
<?php
$x = 75;
$y = 25;

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;
?>

</body>
</html>





