document.addEventListener("DOMContentLoaded", function() {
    var buttons = document.querySelectorAll(".button-container > div");
    var forms = document.querySelectorAll(".form-container");
    var ajouterButton = document.querySelector(".button-ajouter");
    var modifierButton = document.querySelector(".button-modifier");
    var supprimerButton = document.querySelector(".button-supprimer");

    var passwordInput = document.getElementById("mdp");
    var togglePasswordButton = document.getElementById("togglePassword");

    // Afficher le formulaire de suppression par défaut
    document.getElementById("form-supprimer").style.display = "block";
    supprimerButton.style.backgroundColor = "#B00000";
    supprimerButton.style.color = "white"; 

    buttons.forEach(function(button) {
        button.addEventListener("click", function(event) {
            var formId = event.target.getAttribute("data-form");
            forms.forEach(function(form) {
                if (form.id === formId) {
                    form.style.display = "block";
                } else {
                    form.style.display = "none";
                }
            });

            // Réinitialiser la couleur des boutons à leur couleur par défaut
            ajouterButton.style.backgroundColor = "";
            ajouterButton.style.color = "";
            modifierButton.style.backgroundColor = "";
            modifierButton.style.color = "";
            supprimerButton.style.backgroundColor = "";
            supprimerButton.style.color = "";

            // Définir la couleur de fond et de texte du bouton cliqué
            event.target.style.backgroundColor = "#B00000"; 
            event.target.style.color = "white"; 
        });
    });

    togglePasswordButton.addEventListener("click", function() {
        // Bascule entre le type "password" et "text" pour afficher ou masquer le mot de passe
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            togglePasswordButton.textContent = "👁️";
        } else {
            passwordInput.type = "password";
            togglePasswordButton.textContent = "👁️";
        }
    });
});
