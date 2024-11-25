<?php
// Vérifier si le formulaire a bien été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $prenom = isset($_POST['prénom']) ? htmlspecialchars($_POST['prénom']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
    $ageCheck = isset($_POST['ageCheck']) ? "Yes" : "No";
    
    // Affichage des données saisies
    echo "<!DOCTYPE html>
    <html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Traitement des données</title>
        <link rel='stylesheet' href='assets/bootstrap/css/bootstrap.min.css'>
        <link rel='stylesheet' href='assets/css/styles.css'>
    </head>
    <body>
        <div class='container'>
            <h2 class='text-center my-4'>Données soumises</h2>
            <div class='card'>
                <div class='card-body'>
                    <p><strong>Nom :</strong> $name</p>
                    <p><strong>Prénom :</strong> $prenom</p>
                    <p><strong>Email :</strong> $email</p>
                    <p><strong>Mot de passe :</strong> $password</p>
                    <p><strong>Message :</strong> $message</p>
                    <p><strong>Vous êtes majeur(e) :</strong> $ageCheck</p>
                </div>
            </div>
        </div>
    </body>
    </html>";
}
?>
