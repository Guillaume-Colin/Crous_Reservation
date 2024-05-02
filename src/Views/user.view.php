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
    <script src="../public/js/user.js" defer></script>
</head>
<body>
    <?php include_once("navbar.view.php"); ?>
    <form method="POST">
        <input type="hidden" name="controleMenu" value="O"/>
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
                <form id="form-ajouter" class="form-container" style="display: none;">
                    <div class="form-group1">
                        <input type="text" name="nouveau_nom" placeholder="nom">
                    </div>
                </form>

                <form id="form-modifier" class="form-container" style="display: none;">
                    <div class="form-group1">
                        <input type="text" name="nouveau_nom" placeholder="Nouveau nom">
                    </div>
                </form>
                <form id="form-supprimer" class="form-container" style="display: none;">
                    <div class="form-group2">
                            <input type="text" name="nouveau_nom" placeholder="Nouveau ">
                    </div>
                </form>
            </div>
        </div>
    </form>
</body>
</html>