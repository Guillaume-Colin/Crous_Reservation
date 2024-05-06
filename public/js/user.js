document.addEventListener("DOMContentLoaded", function() {
    var buttons = document.querySelectorAll(".button-container > div");
    var forms = document.querySelectorAll(".form-container");
    var togglePasswordButton = document.getElementById("togglePassword");

    // Afficher le formulaire d'ajout par défaut
    document.getElementById("form-ajouter").style.display = "block";

    // Gérer les événements des boutons
    buttons.forEach(function(button) {
        button.addEventListener("click", function(event) {
            var formId = event.target.getAttribute("data-form");

            // Afficher le formulaire correspondant au bouton cliqué
            forms.forEach(function(form) {
                if (form.id === formId) {
                    form.style.display = "block";
                } else {
                    form.style.display = "none";
                }
            });

            // Mettre en surbrillance le bouton cliqué
            buttons.forEach(function(btn) {
                btn.style.backgroundColor = "";
                btn.style.color = "";
            });
            event.target.style.backgroundColor = "#B00000";
            event.target.style.color = "";
        });
    });

    // Afficher ou masquer le mot de passe
    togglePasswordButton.addEventListener("click", function() {
        var passwordInput = document.getElementById("mdp");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            togglePasswordButton.textContent = "👁️";
        } else {
            passwordInput.type = "password";
            togglePasswordButton.textContent = "👁️";
        }
    });

    // Préremplir les champs du formulaire de modification lors de la recherche
    var searchButton = document.querySelector(".recherche-button");
    searchButton.addEventListener("click", function(event) {
        var idInput = document.querySelector("input[name='nouveau_nom']");
        var nomInput = document.querySelector("input[name='nom']");
        var prenomInput = document.querySelector("input[name='prenom']");
        var roleSelect = document.querySelector("select[name='role']");

        // Récupérer les informations de l'utilisateur à partir de l'ID
        var userId = idInput.value.trim(); // Récupérer l'ID entré par l'utilisateur
        // Faire une requête AJAX pour récupérer les informations de l'utilisateur correspondant à l'ID

        // Exemple de données d'utilisateur obtenues de la requête AJAX (à remplacer par les vraies données obtenues de la requête AJAX)
        var userData = {
            nom: "Nom de l'utilisateur",
            prenom: "Prénom de l'utilisateur",
            role: "Role de l'utilisateur"
        };

        // Préremplir les champs du formulaire avec les données de l'utilisateur
        nomInput.value = userData.nom;
        prenomInput.value = userData.prenom;
        roleSelect.value = userData.role;
    });
});
