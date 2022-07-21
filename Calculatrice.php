<?php
/* Bonjour. Veuillez choisir entre l'addition(+), la soustraction(-), ou la multiplication(*)*/
/* Veuillez saisir un nombre entre 1 et 100*/
/*erreur: veuillez saisir un nombre entre 1 et 100 */

echo "Bonjour : ";
echo "\n";


do {
    $signe = readline("Veuillez choisir entre l'addition(+), la soustraction(-), ou la multiplication(*) ");
} while ($signe !== "+" && $signe !== "-" && $signe !== "*" && $signe !== "/");

if ($signe == "+") {
    echo "vous avez choisi l'addition";
} elseif ($signe == "-") {
    echo "vous avez choisi la soustraction";
} elseif ($signe == "*") {
    echo "vous avez choisi la multiplication";
} elseif ($signe == "/") {
    echo "vous avez choisi la division";
} else {
    echo "erreur : ";
}

echo "\n";

echo "choisissez un nombre : ";
echo "\n";
echo "\n";
$nombrechoisi = readline();
echo "\n";

if ($signe == "+") {
    for ($i = 1; $i <= 10; $i++) {
        echo $nombrechoisi, " + ", $i , " = ", $nombrechoisi+$i ."\n";
    }
    echo "\n";
    echo "Voici la table d'addition de : ", $nombrechoisi;
} elseif ($signe == "-") {
    for ($i = 10; $i >= 1; $i = $i - 1) {
        echo $i , "-", $nombrechoisi,"=", $i-$nombrechoisi."\n";
    }    
    echo "\n";
    echo "Voici la table de soustraction de : ", $nombrechoisi;
} elseif ($signe == "*") {
    for ($i=1; $i <=10 ; $i++) { 
        echo $nombrechoisi, "x", $i, "=", $nombrechoisi*$i ."\n";
    }
    echo "\n";
    echo "Voici la table de multiplication de : ", $nombrechoisi;
} elseif ($signe == "/") {
    for ($i=1; $i <=10 ; $i++) { 
        echo $nombrechoisi, "/", $i, "=", $nombrechoisi/$i ."\n";
    }
    echo "\n";
    echo "Voici la table de division de : ", $nombrechoisi;
}   

?>