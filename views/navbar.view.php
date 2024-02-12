<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: "Alata", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        nav {
            background-color: #fff;
            color: #fff;
            display: flex;
            align-items: center;
            padding: 15px 15px;
        }

        .logo img {
            width: 50px;
        }

        .nav-links {
            flex-grow: 1;
            text-align: center;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        .user-info {
            display: flex;
            align-items: center;
        }

        .user-info img {
            width: 30px;
            margin-left: 10px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="../img/logo_crous.png" alt="Logo">
        </div>
        <div class="nav-links">
            <a href="#">Accueil</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
        </div>
        <div class="user-info">
            <span>Bienvenue, Utilisateur</span>
            <img src="user-avatar.png" alt="Avatar">
        </div>
    </nav>
</body>
</html>

