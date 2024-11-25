<?php
// Inclusion du fichier budget.php
include 'budget.php';

// Définition des achats et du budget
$achats = [50, 20, 30, 15]; // Exemple de prix des achats
$budget = 100; // Montant du budget

// Appel de la fonction budget et vérification du résultat
if (budget($achats, $budget)) {
    echo "Le budget est suffisant pour ces achats.";
} else {
    echo "Le budget n'est pas suffisant pour ces achats.";
}
?>
