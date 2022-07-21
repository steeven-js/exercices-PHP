<?php

/* **********EXERCICE 1********** */

/*$a = 0;
$b = 0;

$a = readline("Inscrivez la valeur de A : ");

$b = readline("Inscrivez la valeur de B : ");

if ($a > $b) {
    echo "a est plus grand que b";
} elseif ($a == $b) {
    echo "a est égal à b";
} else {
    echo "a est plus petit que b";
}*/

/* **********EXERCICE 2.1********** */

/*$age = 0;
$ageN = 18;
$ageN2 = 50;

$age = readline("Quel est votre âge? : ");

if ($age < $ageN) {
        echo "Vous etes mineur";
    } elseif ($age == $ageN) {
        echo "Bravo vous etes majeur";
    } elseif ($age > $ageN && $age < $ageN2){
        echo "Vous etes majeur";
    } elseif ($age >= $ageN2){
        echo "Vous etes sénior";
}*/

/* **********EXERCICE 2.2********** */

/*$age = 0;
$ageN = 18;
$ageN2 = 25;
$ageN3 = 50;
$ageN4 = 13;

$f1 = "Evil dead";
$f2 = "American Pie";
$f3 = "Cars";
$f4 = "50 nuance de grey";
$f5 = "Pat patrouille";

echo "Bienvenue à MADIANA" ."\n";
echo "***************************";
echo "\n";
echo "C'EST LA FÊTE DE CINEMA" ."\n";
echo "***************************";
echo "\n";
echo "Nous vous proposons des films en fonction de votre âge" ."\n";
echo "***************************";
echo "\n";

$age = readline("Quel est votre âge? : ");

if ($age < $ageN4) {
        echo "Vous etes mineur" ."\n";
        echo "\n";
        echo "Voici le(s) film(s) que vous pouvez voir:" ."\n";
        echo "\n";
        echo $f5 ."\n";
    } elseif ($age >= $ageN4 && $age < $ageN) {
        echo "Vous etes mineur" ."\n";
        echo "\n";
        echo "Voici le(s) film(s) que vous pouvez voir:" ."\n";
        echo "\n";
        echo $f3 ."\n";
    } elseif ($age > $ageN && $age < $ageN2) {
        echo "Bravo vous etes majeur et vous avez moins de 25 ans" ."\n";
        echo "\n";
        echo "Voici le(s) film(s) que vous pouvez voir:" ."\n";
        echo "\n";
        echo $f1 ."\n";
    } elseif ($age >= $ageN2 && $age < $ageN3){
        echo "Vous etes majeur et vous avez plus de 25 ans" ."\n";
        echo "\n";
        echo "Voici le(s) film(s) que vous pouvez voir:" ."\n";
        echo "\n";
        echo $f2 ."\n";
    } elseif ($age >= $ageN3){
        echo "Vous etes sénior" ."\n";
        echo "\n";
        echo "Voici le(s) film(s) que vous pouvez voir:" ."\n";
        echo "\n";
        echo $f4 ."\n";
}*/

/* **********EXERCICE 3********** */

/*echo "entre 0 et 2";
echo "\n";
$i = readline("Quel est votre action : ");
echo "\n";
switch ($i) {
    case 0:
        echo "je ne fais rien";
        break;
    case 1:
        echo "j'attaque";
        break;
    case 2:
        echo "Je défend";
        break;
    default:
        echo "Commande inconnu";      
}*/

/*$action = (int)readline("Entrez votre action : (1: Attaquer, 2: Défendre, 3: passer mon tour: )" );

if ($action === 1) {
    echo "j'attaque";
} elseif ($action === 2) {
    echo "Je défends"; 
} elseif ($action === 3) {
    echo "Je ne fais rien";
} else {
    echo "commande inconnue";
}*/

/* **********EXERCICE 4********** */ 

/*$note = 0;
$moy = 10;

echo "\n";
$note = readline("Veuillez entrer votre note : ");
echo "\n";

if ($note < $moy) {
    echo "\n";
    echo "Vous n'avez pas la moyenne";
    echo "\n";
} elseif ($note == $moy) {
    echo "\n";
    echo "Vous avez tous juste la moyenne";
    echo "\n";
} elseif ($note > $moy) {
    echo "\n";
    echo "Vous avez la moyenne";
    echo "\n";
}*/

/*<?php
$note = (int)readline('Entrez votre note :');

if ($note>10) {
	echo 'Bravo vous avez la moyenne';
} elseif ($note===10) {
	echo 'Vous avez juste la moyenne';
} else {
	echo 'Dommage vous n\'avez pas la moyenne';
}
?>*/

/* **********EXERCICE 5********** */ 
// (9 12) (14 17)

$h = 0;

echo "\n";
echo "********** Bonjour **********" ."\n";
echo "Veuillez entrer l'heure pour savoir si nous sommes ouvert" ."\n";
$h = (int)readline("");
echo "\n";
echo "*****************************" ."\n";

do {
    echo "\n";
    echo("Erreur");
    echo "\n";
    echo "Veuillez entrer l'heure pour savoir si nous sommes ouvert" ."\n";
    $h = (int)readline("");
    echo "\n";
} while ($h < 0 && $h > 24);


if ($h < 8) {
    echo "Le magasin est fermé" ."\n";
} elseif ($h >= 8 && $h < 12){
    echo "Le magasin est ouvert" ."\n";
} elseif ($h > 12 && $h < 14){
    echo "Le magasin est fermé" ."\n";
} elseif ($h >= 14 && $h < 17){
    echo "Le magasin est ouvert" ."\n";
} elseif ($h >= 17){
    echo "Le magasin est fermé" ."\n";
} else {
    echo "LOL";
}   
echo "\n";
echo "*****************************" ."\n";  

?>