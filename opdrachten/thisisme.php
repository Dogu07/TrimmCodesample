<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<img src="https://vignette.wikia.nocookie.net/youtubepoop/images/3/37/Awesome_med.png/revision/latest?cb=20090831045931" height="100" width="100" alt="icon"/>

<?php

$Voornaam = 'Dogukan';
$Achternaam = 'Öztürk';
$Adres = 'Het Egbertink';
$Huisnummer = '72';
$Plaats = 'Losser';
$Leeftijd = '16';

echo <<<TEKST
<h1>Naam : $Voornaam $Achternaam </h1>
<h2>Adres ; $Adres $Huisnummer $Plaats </h2>
<h3>Leeftijd : $Leeftijd </h3>


TEKST;



?>

</body>
</html>





