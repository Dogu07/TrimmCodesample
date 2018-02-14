<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h3>php lab02</h3>
<?php
$naam = "Karim";
$nederlands = "8.5";
$engels = "7.7";
$rekenen = "6.7";
$programmeren = "8.5";
$databases = "9.4";
$gemiddeld = 8.2;
//Sophie
$naamS = "Sophie";
$nederlandsS= "8.9";
$engelsS = "8.7";
$rekenenS = "9.7";
$programmerenS = "9.5";
$databasesS = "9.2";
$gemiddeldS = 9.2;

echo "<table border='1'>
<caption>
<strong>Rapport</strong>
</caption>
<thead>
<tr><th>Naam</th><th>Nederlands</th>
<th>Rekenen</th><th>Programmeren</th><th>Databases</th>
<th>Gemiddeld</th>
</tr>
</thead>
<tbody>
<tr>
<td>$naam</td>
<td>$nederlands</td>
<td>$engels</td>
<td>$rekenen</td>
<td>$programmeren</td>
<td>$databases</td>
<td>$gemiddeld</td>
</tr>
<tr>
<td>$naamS</td>
<td>$nederlandsS</td>
<td>$engelsS</td>
<td>$rekenenS</td>
<td>$programmerenS</td>
<td>$databasesS</td>
<td>$gemiddeldS</td>
</tr>
</tbody>
<tfoot>
<tr><td colspan='6'>Groep gemiddeld</td>
<td>8.7</td></tr>
</tfoot>
</table>";
?>

</body>
</html>