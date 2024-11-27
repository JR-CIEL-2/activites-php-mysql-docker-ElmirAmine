<?php
// Vérifier si le formulaire a bien été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $prenom = isset($_POST['prénom']) ? htmlspecialchars($_POST['prénom']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
    $ageCheck = isset($_POST['ageCheck']) ? "Yes" : "No";

    // Vérifier si le fichier data.json existe et le lire
    $filePath = '/code/data.json';
    $usersData = file_exists($filePath) ? json_decode(file_get_contents($filePath), true) : [];

    // Vérifier si l'email existe déjà
    $emailExists = false;
    foreach ($usersData as $user) {
        if ($user['email'] === $email) {
            $emailExists = true;
            break;
        }
    }

    if ($emailExists) {
        // Si l'email existe déjà, retourner un message d'erreur
        echo json_encode(['status' => 'error', 'message' => 'Le compte existe déjà.']);
    } else {
        // Si l'email n'existe pas, ajouter le nouvel utilisateur
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Assurez-vous de ne pas stocker de mot de passe en clair
        $newUser = [
            'name' => $name,
            'prénom' => $prenom,
            'email' => $email,
            'password' => $hashedPassword,
            'message' => $message,
            'ageCheck' => $ageCheck
        ];

        // Ajouter l'utilisateur au tableau
        $usersData[] = $newUser;

        // Sauvegarder les données dans le fichier JSON
        file_put_contents($filePath, json_encode($usersData, JSON_PRETTY_PRINT));

        // Retourner une réponse de succès
        echo json_encode(['status' => 'success', 'message' => 'Compte créé avec succès.']);
    }
}
?>
