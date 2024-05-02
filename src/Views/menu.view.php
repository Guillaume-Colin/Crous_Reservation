<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <title>Choix Menu</title>
    <link rel="stylesheet" href="../public/css/menu.css">
    <!-- <meta http-equiv="refresh" content="3"> -->
</head>
<body>
    <?php include_once("navbar.view.php"); ?>
    <form method="POST">
        <input type="hidden" name="controleMenu" value="O"/>
        <div class="container">
            <div class="header">
                <h1>Choix Menu</h1>
            </div>
            <div class="rectangle">
                <div class="section-title">
                    <h3>Entrées :</h3>
                </div>
                <select name="entree">
                    <option value="NULL" label="Sélectionner une entrée"></option>
                    <?php
                    foreach ($param["listeEntrees"] as $item)
                    {
                        $selected = $item->id_article == $param["idEntree"] ? 'selected' : '';
                        echo '<option value="'.$item->id_article.'" label="'.$item->nom_article.'" '.$selected.'>'.$item->nom_article.'</option>';
                    }
                    ?>
                </select>
                <div class="section">
                    <div class="section-title">
                        <h3>Plats :</h3>
                    </div>
                    <select name="plat">
                        <option value="NULL" label="Sélectionner un plat"></option>
                        <?php
                        foreach ($param["listePlats"] as $item)
                        {
                            $selected = $item->id_article == $param["idPlat"] ? 'selected' : '';
                            echo '<option value="'.$item->id_article.'" label="'.$item->nom_article.'" '.$selected.'>'.$item->nom_article.'</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="section">
                    <div class="section-title">
                        <h3>Desserts :</h3>
                    </div>
                    <select name="dessert">
                        <option value="NULL" label="Sélectionner un dessert"></option>
                        <?php
                        foreach ($param["listeDesserts"] as $item)
                        {
                            $selected = $item->id_article == $param["idDessert"] ? 'selected' : '';
                            echo '<option value="'.$item->id_article.'" label="'.$item->nom_article.'" '.$selected.'>'.$item->nom_article.'</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="footer">
                    <button class="cancel-button" type="button" onclick="window.location.href='./src/horaire.php'">Annuler</button>
                    <button class="validate-button" type="submit" onclick="afficherMessageBox()">Réserver</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
