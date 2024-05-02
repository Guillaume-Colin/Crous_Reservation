<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <title>Choix Menu</title>
    <link rel="stylesheet" href="../public/css/user.css">
    <link rel="stylesheet" href="../public/js/user.js">
    <!-- <meta http-equiv="refresh" content="2"> -->

</head>
<body>
    <?php include_once("navbar.view.php"); ?>
    <form method="POST">
        <input type="hidden" name="controleMenu" value="O"/>
        <div class="container">
            <div class="header">
                <h1>Gestion des utilisateurs</h1>
                🚧🚧🚧🚧🚧 PAGE EN CONSTRUCTION 🚧🚧🚧🚧🚧
            </div>
            <div class="rectangle">
                <div class="button-container">
                    <div class="button-ajouter" onclick="highlightButton(this)" onmouseover="highlightButton(this)" onmouseout="removeHighlight(this)">Ajouter</div>
                    <div class="button-modifier" onclick="highlightButton(this)" onmouseover="highlightButton(this)" onmouseout="removeHighlight(this)">Modifier</div>
                    <div class="button-supprimer" onclick="highlightButton(this)" onmouseover="highlightButton(this)" onmouseout="removeHighlight(this)">Supprimer</div>
                </div>
                <form method="POST">
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
                <option value="Personnel">Administrateur</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" name="identifiant" placeholder="Identifiant">
            <input type="password" name="mdp" placeholder="Mot de passe">
        </div>
        <div class="form-group">
            <input type="submit" name="valider" value="Valider">
            <input type="submit" name="supprimer" value="Supprimer">
        </div>
    </form>
            </div>
        </div>
    </form>
</body>
</html>
