<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
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
            justify-content: space-between;
            padding: 10px 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.5);
            width: 100%;
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        .logo img {
            width: 50px;
            padding-left: 50px;
        }

        .right-content {
            display: flex;
            align-items: center;
        }

        .right-content span {
            margin-right: 10px;
            font-size: 18px;
            font-weight: bold;
            color: black;
        }

        .right-content img {
            width: 30px;
            cursor: pointer;
            padding-right: 30px;
            transition: transform 0.3s;
            padding-left: 30px;
        }

        .right-content img:hover{
            transform: scale(1.2);
        }
        .logo img:hover{
            transform: scale(1.2);
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <a href="accueil.php">
                <img src="./public/img/logo_crous.png">
            </a>
        </div>
        <div class="right-content">
            <span><?php echo $_SESSION['nom'].' '.$_SESSION['prenom'].' ['.$_SESSION['login'].']' ?></span>
            <a href="./index.php?Logout=O">
                <img src="./public/img/logout.png">
            </a>
        </div>
    </nav>
</body>
</html>
