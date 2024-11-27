function verifierFormulaire() {
    const name = document.getElementById('name');
    const prenom = document.getElementById('prenom');
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    const message = document.getElementById('message');
    const passwordError = document.getElementById('password-error');

    let valid = true;

    // Fonction de validation des champs
    function validateField(field) {
        if (field.value.trim() === "") {
            field.style.borderColor = "red";
            valid = false;
        } else {
            field.style.borderColor = "green";
        }
    }

    // Fonction de validation du mot de passe
    function validatePassword() {
        if (password.value.length < 8) {
            password.style.borderColor = "red";
            passwordError.classList.remove('invisible');
            valid = false;
        } else {
            password.style.borderColor = "green";
            passwordError.classList.add('invisible');
        }
    }

    // Validation des champs
    validateField(name);
    validateField(prenom);
    validateField(email);
    validateField(message);
    validatePassword();

    // Si le formulaire est valide, envoyer les données au serveur
    if (valid) {
        const formData = new FormData(document.getElementById('formulaire'));
        fetch('traitement.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'error') {
                // Afficher l'erreur si le compte existe déjà
                alert(data.message);
                document.getElementById('formulaire').reset(); // Optionnel, réinitialiser le formulaire
            } else if (data.status === 'success') {
                // Afficher un message de succès si le compte est créé
                alert(data.message);
                document.getElementById('formulaire').reset(); // Réinitialiser le formulaire
            }
        })
        .catch(error => {
            alert('Erreur lors de l\'envoi du formulaire.');
        });
    } else {
        alert('Veuillez remplir tous les champs correctement.');
    }
}
