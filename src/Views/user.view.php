<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <title>Gestion des utilisateurs</title>
    <link rel="stylesheet" href="../public/css/user.css">
    <script src="../public/js/user.js" defer></script>
</head>
<body>
<?php include_once("navbar.view.php"); ?>
<div class="container">
    <div class="header">
        <h1>Gestion des utilisateurs</h1>
    </div>
    <div class="rectangle">
        <div class="button-container">
            <div class="button-ajouter" data-form="form-ajouter">Ajouter</div>
            <div class="button-modifier" data-form="form-modifier">Modifier</div>
            <div class="button-supprimer" data-form="form-supprimer">Supprimer</div>
        </div>

        <!-- Formulaire d'ajout -->
        <form id="form-ajouter" class="form-container" style="display: none;" method="POST">
            <input type="hidden" name="controleMenu" value="O"/>
            <div class="form-group1">
                <div class="form-group">
                    <input type="text" name="nom" placeholder="Nom" required>
                    <input type="text" name="prenom" placeholder="Prénom" required>
                </div>
                <div class="form-group">
                    <select name="role" required>
                        <option value="" selected disabled>Role</option>
                        <option value="Etudiant">Etudiant</option>
                        <option value="Professeur">Professeur</option>
                        <option value="Personnel">Personnel</option>
                        <option value="Administrateur">Administrateur</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" name="identifiant" placeholder="Identifiant" required>
                    <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" required> 
                </div>
                <div class="form-group">
                    <span class="toggle-password" id="togglePassword">👁️</span>  
                </div>
                <div class="form-group">
                    <button class="cancel-button" name="supprimer" value="Supprimer" type="button" onclick="window.location.href='./accueil.php'">Annuler</button>
                    <button class="validate-button" type="submit" name="valider" value="Valider">Valider</button>
                </div>
            </div>
        </form>

        <!-- Formulaire de modification -->
        <form id="form-modifier" class="form-container" style="display: none;">
            <div class="form-group2">
                <div class="form-group">
                    <input type="text" name="nouveau_nom" placeholder="ID Utilisateur à modifié">
                    <input class="recherche-button" type="submit" name="valider" value="Recherche">
                </div>
                <div class="form-group">
                    <input type="text" name="nom" placeholder="Nom">
                    <input type="text" name="prenom" placeholder="Prénom">
                </div>
                <div class="form-group">
                    <select name="role">
                        <option value="" selected disabled>Role</option>
                        <option value="Etudiant">Etudiant</option>
                        <option value="Professeur">Professeur</option>
                        <option value="Personnel">Personnel</option>
                        <option value="Administrateur">Administrateur</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" name="identifiant" placeholder="Identifiant">
                    <input type="password" name="mdp" id="mdp" placeholder="Mot de passe"> 
                </div>
                <div class="form-group">
                    <span class="toggle-password" id="togglePassword">👁️</span>  
                </div>
                <div class="form-group">
                    <button class="cancel-button" name="supprimer" value="Supprimer" type="button" onclick="window.location.href='./accueil.php'">Annuler</button>
                    <input class="recherche-button-delete" type="submit" name="valider1" value="Recherche">
                </div>
            </div>
        </form>

        <!-- Formulaire de recherche -->
        <form action="#form-supprimer" method="POST" id="form-recherche">
            <input class="input-delete" type="text" name="nomUser" placeholder="User ID" value="<?php echo $param["nomUser"] ?>">
            <button class="search-button-delete" type="submit" value="Recherche" form="form-recherche">Recherche</button>
        </form>

        <!-- Formulaire de suppression -->
        <form id="form-supprimer" class="form-container" style="display: none;" method="POST"> 
            <div class="form-group3" style="overflow-y: auto; max-height: 200px;">
            <?php
                if (isset($_POST["nomUser"]) && empty($param["listeUsers"])) {
                    echo '<center><p>Aucun utilisateur trouvé</p></center>';
                } elseif (!empty($param["listeUsers"])) {
                    foreach ($param["listeUsers"] as $user) {
                        echo '<div class="sousRectangle">';
                        echo '<h3 class="sousTitre">' . $user->nom . ' ' . $user->prenom . ' (' . $user->role . ')</h3>';
                        echo '<form method="POST" action="user.php">';
                        echo '<input type="hidden" name="idToDelete" value="' . $user->id_personne . '|' . $user->role . '">';
                        echo '<button type="submit" class="boutonCarre boutonSupprimer supprimer-image" name="deleteUser"></button>';
                        echo '</form>';
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </form>
    </div>
</div>
</body>
</html>
