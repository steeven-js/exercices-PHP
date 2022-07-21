<?php

/* ex1 */

/*
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

for ($i = 10; $i >= 1; $i--) {
    echo $i ."\n";
}

for ($i = 1; $i <= 10; $i+=2) {
    echo $i ."\n";
}

for ($i = 1; $i <= 10; $i = $i + 2) {
    echo $i ."\n";
}

for ($i = 10; $i >= 1; $i = $i - 2) {
    echo $i ."\n";
}*/

// for ($i = 1; $i <= 10; $i++) {
//     echo $i = $i + 1 ."\n";
// }

/* ex2 */

/*
$i = 1;
while ($i <= 10) {
    echo $i++ . "\n";  
}
echo "fin de la boucle"
*/

/* ex3 addition */

/*$i = (int)readline("veuillez entrer un nombre compris entre 1 et 10 : ");
echo "\n";
while ($i >= 10) {
    echo $i = $i + 1 ."\n";  
}*/

// $nombrechoisi = (int)readline("veuillez entrer un nombre compris entre 1 et 10 : ");
// for ($i = 1; $i <= 10; $i++) {
//     echo $nombrechoisi, "+", $i, "=", $nombrechoisi+$i ."\n";
// } 

/*
$nombrechoisi = (int)readline("veuillez entrer un nombre compris entre 1 et 10 : ");
while ($nombrechoisi < 0 || $nombrechoisi > 10) {
    echo "erreur" ."\n";
    $nombrechoisi = (int)readline("veuillez entrer un nombre compris entre 1 et 10 : ");
}
    for ($i = 10; $i >= 1; $i = $i - 1) {
        echo $i , "-", $nombrechoisi,"=", $i-$nombrechoisi."\n";
}  */
/*
$nombrechoisi = (int)readline("veuillez entrer un nombre compris entre 1 et 10 : ");
while ($nombrechoisi < 0 || $nombrechoisi > 10) {
    echo "erreur" ."\n";
    $nombrechoisi = (int)readline("veuillez entrer un nombre compris entre 1 et 10 : ");
}
    for ($i = 10; $i >= 1; $i = $i - 1) {
        echo $i , "-", $nombrechoisi,"=", $i-$nombrechoisi."\n";
}  */
/*
$nombrechoisi = (int)readline("Bonjour, veuillez saisir un nombre compris entre 1 et 100 pour afficher sa table de multiplication");
for ($i=1; $i <=10 ; $i++) { 
    echo $nombrechoisi, "x", $i, "=", $nombrechoisi*$i ."\n";
}
*/

/************ La boucle FOR-EACH *************/

// $notes = [10, 15, 20];
// foreach ($notes as $note) {
//     echo " - $note \n";
// }

$eleves = [
    'cm2' => ['Jean', 'Marc', 'Jane', 'Marion'],
    'cm1' => ['Emilie', 'Marcelin']
];

foreach ($eleves as $classe => $listeEleve) {
    echo " La classe : $classe \n";
    foreach ($listeEleve as $eleve) {
        echo " - $eleve \n";
    }
}
?>
