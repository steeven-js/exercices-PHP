<?php

/* exemple foreach 3 : la clé et la valeur */
 
$a = [
    "un" => 1,
    "deux" => 2,
    "trois" => 3,
    "dix-sept" => 17,
];

foreach ($a as $k => $v) {
    echo "[$k] => $v.\n";
}


?>