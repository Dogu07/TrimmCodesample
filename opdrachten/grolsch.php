<?php
$leeftijd = rand(10,30);

if ($leeftijd >= 18) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "http://www.grolsch.nl/agegate/?_url=/agegate&ref=http%3A%2F%2Fwww.grolsch.nl%2F");
    curl_setopt($ch, CURLOPT_HEADER, 0);

    curl_exec($ch);

    curl_close($ch);
}

else {
    header("Location: https://www.alcoholinfo.nl/publiek");
}


