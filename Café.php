<?php
echo "Bonour";
echo "\n";
echo("Voulez vous un café ?");
echo "\n";
echo "(O)ui ou (N)on";
echo "\n";

$reponse = readline();
while ($reponse !== "o" && $reponse !== "n") {
    echo "\n";
    echo("Je n'ai pas compris votre réponse");
    echo "\n";
    echo("Voulez vous un café ?");
    echo "\n";
    echo "(O)ui ou (N)on";
    echo "\n";
    $reponse = readline();
}

echo "\n";
if ($reponse == 'o') {
    echo "voici votre café. Bonne journée";
} else {
    echo "Entendu. Bonne journée";
}


?>