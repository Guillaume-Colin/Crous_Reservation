document.addEventListener("DOMContentLoaded", function() {
    var buttons = document.querySelectorAll(".button-container > div");
    var forms = document.querySelectorAll(".form-container");
    var ajouterButton = document.querySelector(".button-ajouter");
    var modifierButton = document.querySelector(".button-modifier");
    var supprimerButton = document.querySelector(".button-supprimer");


    var passwordInput = document.getElementById("mdp");
    var togglePasswordButton = document.getElementById("togglePassword");

    document.getElementById("form-ajouter").style.display = "block";
    ajouterButton.style.backgroundColor = "#B00000";
    ajouterButton.style.color = "white"; 

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

            // Vérifier si le bouton cliqué est l'un des boutons "Ajouter", "Modifier" ou "Supprimer"
            var isAjouterButtonClicked = event.target.classList.contains("button-ajouter");
            var isModifierButtonClicked = event.target.classList.contains("button-modifier");
            var isSupprimerButtonClicked = event.target.classList.contains("button-supprimer");

            // Réinitialiser la couleur des boutons à leur couleur par défaut
            ajouterButton.style.backgroundColor = "";
            ajouterButton.style.color = "";
            modifierButton.style.backgroundColor = "";
            modifierButton.style.color = "";
            supprimerButton.style.backgroundColor = "";
            supprimerButton.style.color = "";

            // Si aucun autre bouton n'est cliqué, définir la couleur de fond et de texte du bouton correspondant
            var anyButtonClicked = Array.from(buttons).some(function(btn) {
                return btn !== event.target && btn.classList.contains("clicked");
            });

            if (!anyButtonClicked) {
                if (isAjouterButtonClicked) {
                    ajouterButton.style.backgroundColor = "#B00000"; 
                    ajouterButton.style.color = "white"; 
                } else if (isModifierButtonClicked) {
                    modifierButton.style.backgroundColor = "#B00000"; 
                    modifierButton.style.color = "white"; 
                } else if (isSupprimerButtonClicked) {
                    supprimerButton.style.backgroundColor = "#B00000";
                    supprimerButton.style.color = "white"; 
                }
            }
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

