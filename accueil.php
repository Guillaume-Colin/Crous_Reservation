<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <?php
    
function view2($name)
{
    include("./src/Views/$name.view.php");
}
require 'src/Views/navbar.view.php';

view2('horaire');

?>
</body>
</html>
