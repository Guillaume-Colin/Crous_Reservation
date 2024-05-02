<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <title>Recherche</title>
    <link rel="stylesheet" href="../public/css/search.css">
    <!-- <meta http-equiv="refresh" content="3"> -->
</head>
<?php include_once("navbar.view.php"); ?>
<body>
    <div class="container">
        <div class="search-bar">
            <form method="POST">
                <input type="text" placeholder="Entrer le nom d'un restaurant" class="search-input" name="nomResto" value="<?php echo $param["nomResto"] ?>">
                <button class="search-button" type="submit">Recherche</button>
            </form>
        </div>

        <form method="POST">
            <?php
                // Vérifie si la recherche a été effectuée et s'il n'y a pas de résultats
                if(isset($_POST["nomResto"]) && empty($param["listeRestos"])) {
                    echo '<center><p>Aucun établissement trouvé</p></center>';
                } elseif (!empty($param["listeRestos"])) { // Affiche les résultats s'il y en a
                    foreach ($param["listeRestos"] as $item) {
                        echo '<div class="result-box">';
                        echo '<div class="text">';
                        echo '<h1>'.$item->nom_resto.'</h1>';
                        echo '<h2>'.$item->type.'</h2>';
                        echo '<p>'.$item->description_resto.'</p>';
                        echo '</div>';
                        echo '<button class="reserve-button" type="submit" formaction="./horaire.php?idResto='.$item->id_restoCrous.'">Réserver</button>';
                        echo '</div>';
                        echo '<br/>';
                        echo '<br/>';
                    }
                }
            ?>
        </form>

    </div>
</body>
</html>
