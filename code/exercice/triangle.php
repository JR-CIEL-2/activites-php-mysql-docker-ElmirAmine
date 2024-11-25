<?php
// Fonction triangle qui affiche un motif en triangle
function triangle($n) {
    // Boucle sur chaque ligne
    for ($i = 1; $i <= $n; $i++) {
        // Affiche $i étoiles (*) sur chaque ligne, avec un retour à la ligne après chaque ligne
        echo str_repeat('*', $i) . PHP_EOL;
    }
}

// Exemple d'appel de la fonction avec 10 lignes
triangle(10);
?>
