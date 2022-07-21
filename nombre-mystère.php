<?php
echo "Bonour";
echo "\n";
echo("Ce petit jeu consiste à trouver le nombre mystère");
echo "\n";
echo "Veuillez choisir un nombre compris entre 0 et 100";
echo "\n";

$nombreMystere = 35;
$nombreSaisi = (int)readline();
 
$ecart = ($nombreMystere-$nombreSaisi);
if($ecart<0) $ecart=-$ecart;


// echo $ecart;

while ($ecart!==0) {
    if ($nombreSaisi < 0 || $nombreSaisi > 100) {
        echo "Veuillez choisir un nombre compris entre 0 et 100";
    }

    if($ecart<5) {
        echo "Bouillant";
    } 
    else if($ecart<10)  {
        echo "Chaud";
    } 
    else if($ecart<15)  {
        echo "Tiede";
    } 
    elseif ($ecart > 15 && $ecart <= 100){
        echo "Froid";
    } 
    echo "\n";
    $nombreSaisi = (int)readline();
    echo "\n";
    $ecart = ($nombreMystere-$nombreSaisi);
    echo "\n";
    if($ecart<0) {
        $ecart=-$ecart; 
    } 

}

if($ecart==0) echo "Bravo! Vous avez trouvé le nombre mystère";
echo "\n";



?>