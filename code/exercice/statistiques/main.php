<?php

// Inclure les fonctions
include 'statistique.php';

// Exemple pour la moyenne
$tab = [15, 18, 9];
$moyenneValeur = moyenne($tab);
echo 'La moyenne est de ' . $moyenneValeur . ' et ';

// Exemple pour la médiane
$tab2 = [5, 7, 9, 12, 34, 45];
$médianeValeur = médiane($tab2);
echo 'La médiane est de ' . $médianeValeur;

?>
