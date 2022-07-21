<?php

/* Ex1 */
/* 
$eleves = [
   'cm2' => ['Jean', 'Marc', 'Jane', 'Marion'],
   'cm1' => ['Emilie', 'Marcelin'],
   'ce1' => ['Camille', 'Jean'],
   'ce2' => ['Etienne']
];

// foreach ($eleves as $classe => $listeEleve) {
//    echo " La classe : $classe \n";
//    foreach ($listeEleve as $eleve) {
//        echo " - $eleve \n";
//    }
// }


foreach ($eleves as $classe => $listeleves) {
   echo $classe ."\n";
   print_r($listeleves);
   echo "\n";
   echo "$listeleves[0] est dans la classe $classe \n";
}
*/

/*Ex2 */

/*
$auto = [
   'VW' => ['Polo', 'Golf', 'Tiguan'],
   'Seat' => ['Ibiza', 'Leon', 'Ateca']
];

echo "*****Bienvenue chez votre concessionaire Auto***** \n";
echo "***************************************************\n";

*/

// foreach ($auto as $marques => $voiture) {
//    echo "La marque $marques vous présente les voitures suivante : \n";
//    echo "\n";
//    foreach ($voiture as $modele) {
//       echo " -$modele \n";
//       echo "\n";
//    }
// }

/*
foreach ($auto as $marques => $voiture) {
   // echo "$marques";
   foreach ($voiture as $modele) {
      echo "$modele est une voiture de $marques \n";
   }
}
*/

/*ex3 */

/*
foreach ($auto as $marques => $voiture) {
   echo "$voiture[2] est une voiture de la marque : $marques \n";
   echo "$voiture[0] est une voiture de la marque : $marques \n";
   echo "\n";
   foreach ($voiture as $modele) {
      // echo "$voiture[2] est une voiture de la marque : $marques \n";
   }
}
*/


echo "*****Bienvenue chez votre concessionaire Auto***** \n";
echo "***************************************************\n";

$auto = [
   'VW' => [
      'Polo' => 16000,
      'Golf' => 25000,
      'Tiguan'=> 35000
   ],

   'Seat' => [
      'Ibiza' => 14000,
      'Leon' => 25000,
      'Ateca' => 28000
   ]
];

// print_r($auto);

foreach ($auto as $marques => $voiture) {
   echo "La marque $marques vous présente les voitures suivante : \n";  
   echo "\n";
      foreach ($voiture as $modele => $prix) {
         echo "$modele au prix de $prix € \n";
         echo "\n";
      }  
}
?>