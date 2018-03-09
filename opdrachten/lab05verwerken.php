<?php

if(isset($_POST["submit"]) ){
    if(empty($_POST["naam"]) ){
        echo "naam niet ingevuld";
    }
    else{
        $naam = $_POST["naam"];
        $achternaam = $_POST["achternaam"];
        $adres = $_POST["adres"];
        $postcode = $_POST["postcode"];
        $plaats = $_POST["plaats"];
        $email = $_POST["email"];
        $taal = $_POST["taal"];


        if($taal == "I") {
            echo "ICT-Opleidingen zijn vol. Kies een andere opleiding.";
        }
        elseif($taal == "Engels") {
            echo "Uw naam : $naam";
            echo "<br />";
            echo "Uw Achternaam : $achternaam";
            echo "<br />";
            echo "adres : $adres";
            echo "<br />";
            echo "Postcode $postcode";
            echo "<br />";
            echo "Plaats : $plaats";
            echo "<br />";
            echo "Email : $email";
            echo "<br />";
            echo "<br />";
            echo "U wordt ingeschreven voor de volgende opleiding " . $taal;
        }
        elseif($taal == "Techniek") {
            echo "Uw naam : $naam";
            echo "<br />";
            echo "Uw Achternaam : $achternaam";
            echo "<br />";
            echo "adres : $adres";
            echo "<br />";
            echo "Postcode $postcode";
            echo "<br />";
            echo "Plaats : $plaats";
            echo "<br />";
            echo "Email : $email";
            echo "<br />";
            echo "<br />";
            echo "U wordt ingeschreven voor de volgende opleiding " . $taal;
        }
        elseif($taal == "Nederlands") {
            echo "Uw naam : $naam";
            echo "<br />";
            echo "Uw Achternaam : $achternaam";
            echo "<br />";
            echo "adres : $adres";
            echo "<br />";
            echo "Postcode $postcode";
            echo "<br />";
            echo "Plaats : $plaats";
            echo "<br />";
            echo "Email : $email";
            echo "<br />";
            echo "<br />";
            echo "U wordt ingeschreven voor de volgende opleiding " . $taal;
        }
        else{
            echo "taal niet ingevuld";
        }

    }
}