<?php

// Versione con if elseif

// for ($i=1; $i <= 100; $i++) { 
//     if ((($i % 3) == 0) && (($i % 5) == 0) ) {
//         echo('HACKADEMY') . "\n";
//     }elseif (($i % 5) == 0) {
//         echo('JAVASCRIPT') . "\n";
//     }elseif (($i % 3) == 0) {
//         echo('PHP') . "\n";
//     }else {
//         echo($i) . "\n";
//     }
// }




// Versione con switch

for ($i=1; $i <= 100; $i++) { 
    switch ($i) {
        case (($i % 3) == 0) && (($i % 5) == 0):
            echo('HACKADEMY') . "\n";
            break;

        case ($i % 5) == 0:
            echo('JAVASCRIPT') . "\n";
            break;

        case ($i % 3) == 0:
            echo('PHP') . "\n";
            break;
        
        default:
            echo($i) . "\n";
            break;
    };
};