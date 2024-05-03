<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/styles.css">
    <!-- <meta http-equiv="refresh" content="3"> -->
</head>
<body>
    <form method="POST">
        <div class="login-container">
            <img src="./public/img/logo_crous.png" alt="Votre Logo" class="logo">
            <h1 class="titre">Bienvenue</h1>
            <div class="login-form">
                <h2>Connexion</h2>
                <form action="#" method="POST">
                    <div class="input-group">
                        <label for="username">Nom d'utilisateur:</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="input-group">
                        <label for="password">Mot de passe:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit">Se connecter</button>
                </form>
            </div>
        </div>
    </form>
</body>
</html>
