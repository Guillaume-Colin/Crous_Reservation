<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/accueil.css">
    <!-- <meta http-equiv="refresh" content="3"> -->
    <?php include_once("navbar.view.php"); ?>
</head>
<body>
<?php
if ((isset($_GET['reservation_success']) && $_GET['reservation_success'] == 'true') ||
    (isset($_GET['edit_success']) && $_GET['edit_success'] == 'true') ||
    (isset($_GET['delete_success']) && $_GET['delete_success'] == 'true')) {

    // Déterminer le message en fonction de la variable GET
    $message = '';
    if (isset($_GET['reservation_success'])) {
        $message = '--- Votre réservation a bien été confirmée. ---';
    } elseif (isset($_GET['edit_success'])) {
        $message = '----- L\'utilisateur a été ajouté. -----';
    } elseif (isset($_GET['delete_success'])) {
        $message = '----- L\'utilisateur a été supprimé. -----';
    }

    echo '<div class="reservation-message visible" id="reservationMessage">
        <div class="circle-container">
            <div class="circle"></div>
            <svg class="tick" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5" fill="none"></path>
            </svg>
        </div>
        <span class="reservation-message-close" onclick="fermerMessageBox()">×</span>
        ' . $message . '
    </div>';
}
?>



    <h1 id="titrePrincipal">Bienvenue sur votre espace CROUS Réservation</h1>
    <div id="grandRectangle">
        <h2 id="titre"><u>Mes réservations :</u></h2>
        <a href="../src/user.php"><button class="editUser bouton"><b></b></button></a>
        <a href="../src/Stock.php"><button id="boutonStock"><b></b></button></a>
        <a href="../src/search.php"><button class="bouton bouton-ajouter"><b></b></button></a>
        <?php
                foreach ($param["listeReservations"] as $item) {
                echo '<div id="sousRectangle">';
                echo '<h3 id="sousTitre">'.$item->nom_resto.' : '.$item->date_reserve.'</h3>';
                echo '<a href="./src/Accueil.php?idToDelete='.$item->id_restoCrous.'|'.$item->date_reserve.'"><button class="boutonCarre boutonSupprimer supprimer-image"></button></a>';
                echo '</div>';
            }
        ?>
    </div>
    <script>
    // Fonction pour afficher le message box pendant un certain temps (en millisecondes)
    function afficherMessageBox() {
        var messageBox = document.getElementById("reservationMessage");
        messageBox.classList.add("visible"); 

        setTimeout(function(){
            messageBox.classList.remove("visible");
        }, 3000); 
    }

    function fermerMessageBox() {
            var messageBox = document.getElementById("reservationMessage");
            messageBox.style.display = "none";
        }



    // Calculer la hauteur du grand rectangle en fonction du nombre de réservations
window.onload = function() {
    var grandRectangle = document.getElementById("grandRectangle");
    var sousRectangles = document.querySelectorAll("#sousRectangle");
    var height = 50 + sousRectangles.length * 70; // 50px de marge et 70px par réservation
    grandRectangle.style.height = height + "px";
};
</script>



</body>
</html>
