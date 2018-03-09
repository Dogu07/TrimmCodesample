<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Mijn muziek</title>
    <meta name="description" content="" />
    <meta http-equiv="content-type" charset="UTF-8"/>
    <meta name="keywords" content="" />
    <style>
        .evora {
            width: 100px;
            height: 100px;
        }

    </style>
</head>
<body>
<!-- shoppingcart begint hier -->
<table border=0 cellpadding=0 cellspacing=0 width=100%>
    <form name="order" action="" method="POST">
        <tr>
            <td>
                <img src="../fotos/evora.jpg" class="evora" alt="Sicario"/>
            </td>
        </tr>
        <tr>
            <td>
                Cesaria Evora "Em um concerto" Tracks:10 Prijs: 9.99
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="albumcode[0]" value="001"/>
                <input type="hidden" name="artiest[0]" value="Cesaria Evora"/>
                <input type="hidden" name="titel[0]" value="Em Um Concerto"/>
                <input type="hidden" name="tracks[0]" value="10"/>
                <input type="hidden" name="prijs[0]" value="9.99"/>
                <input type="hidden" name="genre[0]" value="World"/>

                Aantal: <input type="text" size="2" maxlength="3" name="aantal" value="0" style="background-color:#f8ce6c" title="aantal">
                <hr />
            </td>
        </tr>


        <tr>
            <td>
                <input type="checkbox" name="student" value="15" title="student"/> Student 15%<br />
                <input type="checkbox" name="senior" value="10" title="senior"/> Senior 10%<br />
                <input type="checkbox" name="klant" value="5" title="klant"/> Klant 5%<br />
                <br>
                <p>Selecteer een betalingswijze :</p>
                <select name="pay" title="betalingswijze">
                        <option value="Visa">Visa</option>
                        <option value="Mastercard">Mastercard</option>
                        <option value="PayPal">Paypal</option>
                        <option value="Ideal">Ideal</option>
                </select>
            <input type="submit" width="300px" name="sumbit" value="Bestellen" /><br>
        </tr>

        <td><hr /></td>

    </form>
</table>

<!--Shoppingcart eindigt hier -->
<?php
$aantal = $_POST["aantal"];
$korting = 0;
$betaal = $_POST["pay"];


if (isset($_POST["student"])) {
    $korting = $korting + 15;
}
if (isset($_POST["senior"])) {
    $korting = $korting + 10;
}
if (isset($_POST["klant"])) {
    $korting = $korting + 5;
}
echo "Aantal is:$aantal <br> Korting is: $korting procent";



?>
</body>
</html>