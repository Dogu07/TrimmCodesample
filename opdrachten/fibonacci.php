<?php

function printFibonacci($n)
{

    $getal = 0;
    $getal2 = 1;

    echo "Fibonacci \n";

    echo $getal.' ; '.$getal2.' ';

    for($i = 2; $i < $n; $i++){

        $third = $getal + $getal2;

        echo $third.' ; ';

        $getal = $getal2;
        $getal2 = $third;

    }
}
printFibonacci(20);

