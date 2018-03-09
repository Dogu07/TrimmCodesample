<?php
function html_table($info = array())
{
    $rows = array();
    foreach ($info as $row) {
        $cells = array();
        foreach ($row as $cell) {
            $cells[] = "<td>{$cell}</td>";
        }
        $rows[] = "<tr>" . implode('', $cells) . "</tr>";
    }
    return "<table  style=\"border:#d3d3d3\" cellspacing=\"3\" cellpadding=\"3\" border=\"1\" align=\"left\" class='hci-table'>" . implode('', $rows) . "</table>";
}



$info = array(

    array(
        'Naam' => "Bas",
        'Leeftijd' => "<i>18</i>",
        'Woonplaats' => "<i>Borne</i>",
        'Studentnummer' => "<h4>0289351</h4>"),
    array(
        'Naam' => "Rami",
        'Leeftijd' => "<i>19</i>",
        'Woonplaats' => "<i>Vroomshoop</i>",
        'Studentnummer' => "<h4>0289351</h4>"),
    array(
        'Naam' => "Kevin",
        'Leeftijd' => "<i>17</i>",
        'Woonplaats' => "<i>Rijssen</i>",
        'Studentnummer' => "<h4>0289351</h4>"),


    array(
        'Naam' => "Renzo",
        'Leeftijd' => "<i>17</i>",
        'Woonplaats' => "<i>Losser</i>",
        'Studentnummer' => "<h4>0289351</h4>"),


    array(
        'Naam' => "Sanne",
        'Leeftijd' => "<i>17</i>",
        'Woonplaats' => "<i>Oldenzaal</i>",
        'Studentnummer' => "<h4>0289351</h4>"),


    array(
        'Naam' => "Hans",
        'Leeftijd'=> "<i>16</i>",
        'woonplaats'=> "<i>Borculo</i>",
        'Studentnummer'=> "<h4>0289351</h4>"),

    array(
        'Naam'=> "Dogukan",
        'Leeftijd'=>"<i>16</i>",
        'woonplaats'=>"<i>Losser</i>",
        'studentnummer'=>"<h4>0289351</h4>"));



$persoon = $info[rand(0,6)];
$bas = $info[0];
$Rami = $info[1];
$Kevin = $info[2];
$Renzo = $info[3];
$Sanne = $info[4];
$Hans = $info[5];
$Dogukan = $info[6];

echo html_table($info);



