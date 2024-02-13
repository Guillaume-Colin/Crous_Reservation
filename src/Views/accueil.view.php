<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
</head>
<body>
<form>

<?php
require_once './src/Classes/Resto_Crous.php';

            // Boucle pour parcourir le tableau et générer les options
            //var_dump($param);

            echo "<select name=\"listeResto\">";
                foreach ($param as $item) {
                // var_dump($item);
                 //echo $item->id_restoCrous;
                 //echo $item->getIdRestoCrous();
                echo "<option value='".$item->id_restoCrous."'>".$item->nom_resto."</option>";
            }
            echo "</select>";
            ?>

</form>
</body>
</html>
