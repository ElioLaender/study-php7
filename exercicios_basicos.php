<?php

// Imprime valores ímpares de 0 a 100
for ($i = 0; $i <= 100; $i++) {
    if ($i%2 != 0) {
       // echo $i.PHP_EOL;
    }
}


// Gera tabuada
for ($k = 1; $k <= 10; $k++) {
    $number = $k;
    $divider = 0;
    // echo " ---------------------------------- " . PHP_EOL;
    for ($i = 1; $i <= 10; $i++) {
        // echo "$number x $i = ". ($number * $i) . " | ";
        // $divider += $number;
        // echo "$divider / $number = " . ($divider/$number) . PHP_EOL;
    }
}

// IMC
$Weight = 85.0;
$heigth = 1.69;
echo "IMC: " . ($Weight/($heigth * $heigth)) . PHP_EOL;