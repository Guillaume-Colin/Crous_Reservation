<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        nav {
            background-color: #333;
            color: #fff;
            display: flex;
            align-items: center;
            padding: 10px 20px;
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
    <?php
function view($name)
{
    include("./views/$name.view.php");
}
view("navbar");
?>


</body>
</html>
