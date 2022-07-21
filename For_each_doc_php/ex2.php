<?php

/* exemple foreach 2 : la valeur et sa clé d'index */

$a = [
    1, 
    2, 
    3, 
    17
];

$i = 0; /* uniquement pour l'illustration */

foreach ($a as $v) {
    echo "\$a[$i] => $v.\n";
    $i++;
}

?>