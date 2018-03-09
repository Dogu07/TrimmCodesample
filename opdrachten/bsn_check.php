<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<h2>BSN Nummer : </h2>
<form method="post" action="">
    Name: <input type="text" name="bsn" title="bsn">
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (! ctype_digit($_POST['bsn'])) {
    print 'Bsn nummer moet 9 cijfers bevatten';}


else  {
    $bsn = $_POST['bsn'];
    $index = 0;
    $totaal = 0;

    for ($index = 9; $index >= 0 ; $index--)

    {
        $part = substr($bsn, -$index, 1);
        $part *= $index;
        $totaal += $part;
    }
    if ($totaal % 11==0){echo 'elf test geslaagd';}else{echo 'elf test niet geslaagd';}
}


?>

</body>
</html>
