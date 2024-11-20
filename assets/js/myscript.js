function verifierFormulaire() {
 
    const name = document.getElementById('name');
    const prenom = document.getElementById('prenom');
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    const message = document.getElementById('message');
    const passwordError = document.getElementById('password-error');

    let valid = true;

   
    function validateField(field) {
        if (field.value.trim() === "") {
            field.style.borderColor = "red";
            valid = false;
        } else {
            field.style.borderColor = "green";
        }
    }


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


    validateField(name);
    validateField(prenom);
    validateField(email);
    validateField(message);
    validatePassword();

    if (valid) {
        alert('Formulaire valide, envoi en cours...');
       
    } else {
        alert('Veuillez remplir tous les champs correctement.');
    }
}
