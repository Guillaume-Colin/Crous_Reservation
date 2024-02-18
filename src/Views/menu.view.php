<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
<title>Choix Menu</title>
<style>
 .body {

    margin: 0;
    padding: 0;
}

.container {
    width: 50%;
    margin: 0 auto;
    padding-top: 100px;
}

.header {
    text-align: center;
    margin-bottom: 20px;
    font-family: "Alata", sans-serif;
    font-weight: 400;
    font-style: normal;
}

.rectangle {
    margin: 0 15%;
    border: 2px solid black;
    padding: 20px;
    border-radius: 10px;
}

.title {
    text-align: center;
    margin-bottom: 5px;
}

.buttons {
    text-align: center;
    margin-bottom: 10px;
    width: 100%;
    display: flex;
    justify-content: center;
}

.button {
    margin: 5px;
    padding: 0px 17px; /* Ajustement de la hauteur et de la largeur */
    border-radius: 5px;
    cursor: pointer;
}

.validate-button {
    background-color: #B00000;
    color: white;
    border-radius: 5px;
    margin: 5px;
    cursor: pointer;
    padding: 15px 30px;
}

.cancel-button {
    background-color: #FF9955;
    color: black;
    border-radius: 5px;
    margin: 5px;
    cursor: pointer;
    padding: 15px 30px;
}

select {
    width: 100%;
    padding: 5px;
    border-radius: 5px;
}

select:hover {
    background-color: #FF9955; /* Changer la couleur de fond au survol */
}

.section {
    margin-top: 20px;
}

.section-title {
    margin-bottom: 5px;
    margin-top: 5px;
    text-align: center;
    font-family: "Alata", sans-serif;
    font-weight: 400;
    font-style: normal;
 
}


.footer {
    text-align: center;
    margin-top: 20px;
}



</style>

</head>
<?php include_once("./src/Views/navbar.view.php"); ?>
<body>
  <form method="POST">
  <input type="hidden" name="controleMenu" value="O"/>
    <div class="container">
        <div class="header">
            <h1>Choix Menu</h1>
        </div>
        <div class="rectangle">
            <div class="section-title">
                <h3>Entrées :</h3>
            </div>
            <!-- <div class="buttons">
                <button class="button">Végétarien</button>
                <button class="button">Button 2</button>
                <button class="button">Button 3</button>
                <button class="button">Button 4</button>
            </div> -->
            <select name="entree">
              <option value="NULL" label="Sélectionner une entrée"/>
              <?php
              foreach ($param["listeEntrees"] as $item)
              {
                $selected = $item->id_article == $param["idEntree"];
                echo '<option value="'.$item->id_article.'" label="'.$item->nom_article.'" '.$selected.'/>';
              }
              ?>
            </select>
            <div class="section">
                <div class="section-title">
                    <h3>Plats :</h3>
                </div>
                <!-- <div class="buttons">
                <button class="button">Button 1</button>
                <button class="button">Button 2</button>
                <button class="button">Button 3</button>
                <button class="button">Button 4</button>
            </div> -->
            <select name="plat">
            <option value="NULL" label="Sélectionner un plat"/>
             <?php
              foreach ($param["listePlats"] as $item)
              {
                $selected = $item->id_article == $param["idEntree"];
                echo '<option value="'.$item->id_article.'" label="'.$item->nom_article.'" '.$selected.'/>';
              }
              ?>
            </select>
            </div>
            <div class="section">
                <div class="section-title">
                    <h3>Desserts :</h3>
                </div>
                <!-- <div class="buttons">
                <button class="button">Button 1</button>
                <button class="button">Button 2</button>
                <button class="button">Button 3</button>
                <button class="button">Button 4</button>
            </div> -->
            <select name="dessert">
            <option value="NULL" label="Sélectionner un dessert"/>
             <?php
              foreach ($param["listeDesserts"] as $item)
              {
                $selected = $item->id_article == $param["idEntree"];
                echo '<option value="'.$item->id_article.'" label="'.$item->nom_article.'" '.$selected.'/>';
              }
              ?>
            </select>
            </div>
            <div class="footer">
                <button class="cancel-button">Cancel</button>
                <button class="validate-button" type="submit">Validate</button>
            </div>
        </div>
    </div>
    </form>
</body>
</html>
