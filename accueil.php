<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <?php

    require_once './inc/functions_db.php';
    require_once './inc/functions.php';


    $tabResto = [];
    $tabResto = search_db('SELECT id_restoCrous, nom_resto FROM resto_crous');
    view('accueil', $tabResto);


?>
</body>
</html>
