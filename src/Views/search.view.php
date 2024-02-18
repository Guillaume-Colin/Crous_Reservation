<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <title>Recherche</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            /* align-items: center; */
            /* height: 100vh; */
            margin: 0;
            font-family: "Alata", sans-serif;
            overflow-y: auto;
        }
         .container {
            /*text-align: center;*/
            margin-top: 50px;
        } 

        .search-bar {
            margin-bottom: 10px; /* Diminution de la marge pour réduire la hauteur */
            margin-top: 50px;
        }

        .search-input {
            padding: 15px;
            width: 454px;
            font-family: "Alata", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .search-button, .reserve-button {
            background-color: #B00000;
            color: white;
            border-radius: 5px;
            margin: 5px;
            cursor: pointer;
            padding: 20px 30px; /* Augmentation de la hauteur du bouton */
            border: none;
        }

        .result-box {
            border: 1px solid black; /* Contours en noir */
            padding: 10px; /* Réduction de la hauteur */
            width: 600px;
            display: inline-block;
            text-align: left;
            border-radius: 10px;
            position: relative; /* Ajout de la position relative */
        }

        .reserve-button {
            position: absolute; /* Ajout de la position absolue */
            top: 50px; /* Ajustement de la position verticale */
            right: 20px; /* Alignement à droite */
        }

        .result-box h1, .result-box h2, .result-box p {
            margin: 5px 0;
        }

        .text
        {
            padding-left: 20px;
        }
        
    </style>

</head>
<?php include_once("./src/Views/navbar.view.php"); ?>
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
        ?>
        </form>

    </div>
</body>
</html>
