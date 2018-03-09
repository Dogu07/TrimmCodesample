<h2>Reverse</h2>
<form method="GET" action="">
    <input type="text" name="rev" title="reverse">
    <input type="submit" name="submit" value="Submit">

</form>


<?php
function rev()

{
    $string = $_GET["rev"];
    return strrev("$string");
}

if (isset($_GET["rev"]))

{
    echo rev();
}

?>


<h2>Uppercase</h2>
<form method="GET" action="">
    <input type="text" name="uppercase" title="uppercase">
    <input type="submit" name="submit" value="Submit">
</form>


<?php

if (isset($_GET["uppercase"])) {
    function uppercase()
    {
        $string = $_GET["uppercase"];
        $string = str_replace(' ', '', "$string");
        $tekst = $_GET["uppercase"];


        echo "$tekst <br>";
        if (ctype_upper($string)) {
            echo $tekst . ' is all uppercase letters.';
        } else {
            echo $tekst . ' is not all uppercase letters.';
        }

    }
    uppercase();
}


?>

<h2>Prime controle</h2>
<form method="GET" action="">
    <input type="text" name="prime" title="prime">
    <input type="submit" name="submit" value="Submit">
</form>


<?php
if (isset($_GET["prime"])) {
    function prime(){
        $num = $_GET["prime"];
        {
            for ($i = 2; $i < $num; $i++) {
                if ($num % $i == 0) {
                    echo 'NOT prime';
                  exit;
                }
            }
            echo 'Prime';
            exit;
        }

    }

    prime();
}
?>


<h2>Palindrome</h2>
<form method="GET" action="">
    <input type="text" name="palindrome" title="palindrome">
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_GET["palindrome"])) {

    function palin()
    {
        $_GET["rev"] = $_GET["palindrome"];
        $str = $_GET["rev"];

        if ($str == rev()) {
            echo "$str <br>is een palindrome";
            exit;
        }
        else {
            echo "$str <br>is geen palindrome";

        }

    }
    palin();
}

?>

<h2>BSN Nummer : </h2>
<form method="post" action="">
    <input type="text" name="bsn" title="bsn">
    <input type="submit" name="submit" value="Submit">
</form>


<?php
function bsn()
{
    if (!ctype_digit($_POST['bsn'])) {
        print 'Bsn nummer moet 9 cijfers bevatten';
    } else {
        $bsn = $_POST['bsn'];
        $totaal = 0;

        for ($index = 9; $index >= 0; $index--) {
            $part = substr($bsn, -$index, 1);
            $part *= $index;
            $totaal += $part;
        }
        if ($totaal % 11 == 0) {
            echo 'elf test geslaagd';
        } else {
            echo 'elf test niet geslaagd';
        }
    }
}
bsn()
?>

