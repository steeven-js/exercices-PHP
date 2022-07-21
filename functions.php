<?php

// function helloWorld() {
//     echo "Bonjour le monde";
// }

// helloWorld();

/************************************************************************** */

// function userRegister($name) {
//     echo "L'utilisateur ${name} a bien été enregistré";
// }

// userRegister("Steeven");

/************************************************************************** */

// function addition ($a, $b) {
//     return $a+$b;
// }

// echo addition(5,2);

/************************************************************************** */

// function soustraction ($a, $b) {
//     return $a-$b;
// }

// echo soustraction(5,2);

/************************************************************************** */

// function multiplication ($a, $b) {
//     return $a*$b;
// }

// echo multiplication(5,2);

/************************************************************************** */

// function userRegister($name) {
//     echo "Bonjour, je m'appelle ", $name;
// }

// userRegister("Jacques");

// function userRegister2($a) {
//     echo " ",$a;
// }

// userRegister2("Steeven");

// function userAge($b) {
//     echo " et j'ai ",$b;
// }

// userAge("31 ans.");

/************************************************************************** */

/**10 - 5 et 20 - 10 */

// function soustraction ($a, $b, $c, $d) {
//         echo "$a - $b = ",$a-$b;
//         echo "\n";
//         echo "$c - $d = ",$c-$d;
//     }
    
// echo soustraction(10,5,20,10) ."\n";

// function soustraction(int $a, int $b) {

//     return $a-$b;
// }

// $result1 = soustraction(10,5);
// $result2 = soustraction(20,10);

// echo "$result1 \n";
// echo "$result2 \n";

/************************************************************************** */
echo "**************************Bonjour************************************* \n";
echo "Veuillez entrer deux valeurs pour retrouver le résultat de la soustraction : \n";


function demander_nbre_user() {
    $a = readline("Entrez votre premier nombre : ");
    $b = readline("Entrez votre premier nombre : ");
    echo "\n";

    echo "Le résultat de la soustraction est : " .$a-$b;
}

echo demander_nbre_user();


?>