<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/navbar.css">
</head>
<body>
    <nav>
        <div class="logo">
            <a href="accueil.php">
                <img src="./public/img/logo_crous.png">
            </a>
        </div>
        <div class="right-content">
            <span data-content="<?php echo $_SESSION['nom'].' '.$_SESSION['prenom'].' ['.$_SESSION['login'].']' ?>"><?php echo $_SESSION['nom'].' '.$_SESSION['prenom'].' ['.$_SESSION['login'].']' ?></span>
            <a href="./index.php?Logout=O">
                <img src="./public/img/logout.png">
            </a>
        </div>
    </nav>

</body>
</html>
