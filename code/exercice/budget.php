<?php
// Fonction budget qui vérifie si le budget est suffisant
function budget($achats, $budget) {
    // Calcul de la somme des achats
    $totalAchats = array_sum($achats);

    // Si la somme des achats est inférieure ou égale au budget, on retourne true
    if ($totalAchats <= $budget) {
        return true;
    } else {
        return false;
    }
}
?>
