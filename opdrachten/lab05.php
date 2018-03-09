<!DOCTYPE html>
<html lang="nl">
<head>
    <title>Lab05</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <style>
        table, td, th { border: 1px solid gray }


    </style>
</head>

<body>

<form action="lab05verwerken.php" method="POST">
    <table>

        <tr>
            <td>Naam:</td>
            <td><input type="text" name="naam" title="naam"></td>
        </tr>
        <tr>
            <td>Achternaam :</td>
            <td><input type="text" name="achternaam" title="achternaam"></td>
        </tr>
        <tr>
            <td>Adres:</td>
            <td><input type="text" name="adres" title="adres"></td>
        </tr>
        <tr>
            <td>Postcode :</td>
            <td><input type="text" name="postcode" title="postcode"></td>
        </tr>
        <tr>
            <td>Plaats :</td>
            <td><input type="text" name="plaats" title="plaats"></td>
        </tr>
        <tr>
            <td>Email :</td>
            <td><input type="text" name="email" title="email"></td>
        </tr>
    <tr>
             <td colspan="2"><input type="hidden" name="taal" value="false"></td>
    </tr>

</table>



    <br>
    <br>Kies een taal:
    <input type="radio" name="taal" value="I" title="ict"> ICT
    <input type="radio" name="taal" value="Engels" title="engels"> Engels
    <input type="radio" name="taal" value="Techniek" title="techniek"> Techniek
    <input type="radio" name="taal" value="Nederlands" title="nederlands"> Nederlands
    <br><br>
    <input type="submit" name="submit" value="Versturen">
    <input type="reset" name="submit" value="Reset">
</form>
</body>
</html>