<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion du Stock</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .header {
      text-align: center;
      margin-bottom: 50px;
      font-family: "Alata", sans-serif;
      font-weight: 400;
      font-style: normal;
    }

    .container {
      width: 90%;
      padding: 20px;
      text-align: center;
    }

    .zone {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 15px;
    }

    .zone select {
      width: calc(33.33% + 150px); /* Largeur des listes déroulantes augmentée davantage */
      padding: 15px; /* Ajustement de la taille des options */
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #fff;
      color: #333;
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      margin-right: 20px;
    }

    .zone .btn-left,
    .zone .btn-right {
      width: 50px;
      height: 50px;
      line-height: 50px;
      text-align: center;
      background-color: #B00000;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .zone input[type="text"] {
      flex: 0.1;
      padding: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      outline: none;
      box-sizing: border-box;
      background-color: #f9f9f9;
      margin: 0 10px;
    }
  </style>
</head>
<?php include_once("./src/Views/navbar.view.php"); ?>
<body>
<form method="POST" action="stock.php">
  <div class="container">
    <div class="header">
      <h1>Gestion des Stocks</h1>
    </div>
    <!-- Zone des entrées -->
    <div class="zone">
      <select name="entree">
        <option value="NULL" label="Sélectionner une entrée"></option>
        <?php
          foreach ($param["listeEntrees"] as $item)
          {
            $selected = $item->id_article == $param["idEntree"] ? 'selected' : '';
            echo '<option value="'.$item->id_article.'" label="'.$item->nom_article.'" '.$selected.'>'.$item->nom_article.'</option>';
          }
        ?>
      </select>
      <button class="btn-left">&#x2190;</button>
      <input type="text" id="stockInput" value="<?php 
        if (isset($param["stockEntrees"]) && is_array($param["stockEntrees"]) && count($param["stockEntrees"]) > 0) {
            echo $param["stockEntrees"][0]->nombre_articles;
        } else {
            echo "Le stock n'est pas disponible.";
        }
      ?>" readonly>
        
      <button class="btn-right">&#x2192;</button>
    </div>
    
    <!-- Zone des plats -->
    <div class="zone">
      <!-- Sélecteur de plats -->
      <select name="plat">
        <option value="NULL" label="Sélectionner un plat"></option>
        <?php
          foreach ($param["listePlats"] as $item)
          {
            $selected = $item->id_article == $param["idEntree"] ? 'selected' : '';
            echo '<option value="'.$item->id_article.'" label="'.$item->nom_article.'" '.$selected.'>'.$item->nom_article.'</option>';
          }
        ?>
      </select>
      <!-- Boutons pour les plats -->
      <button class="btn-left">&#x2190;</button>
      <input type="text" value="Stock plats" readonly>
      <button class="btn-right">&#x2192;</button>
    </div>
    
    <!-- Zone des desserts -->
    <div class="zone">
      <!-- Sélecteur de desserts -->
      <select name="dessert">
        <option value="NULL" label="Sélectionner un dessert"></option>
        <?php
          foreach ($param["listeDesserts"] as $item)
          {
            $selected = $item->id_article == $param["idEntree"] ? 'selected' : '';
            echo '<option value="'.$item->id_article.'" label="'.$item->nom_article.'" '.$selected.'>'.$item->nom_article.'</option>';
          }
        ?>
      </select>
      <!-- Boutons pour les desserts -->
      <button class="btn-left">&#x2190;</button>
      <input type="text" value="Stock desserts" readonly>
      <button class="btn-right">&#x2192;</button>
    </div>
  </div>
</form>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const entreeSelect = document.querySelector("select[name='entree']");
    const stockInput = document.getElementById("stockInput");
    
    entreeSelect.addEventListener("change", function() {
        const selectedOption = entreeSelect.options[entreeSelect.selectedIndex];
        const stock = selectedOption.dataset.stock;
        stockInput.value = stock ? stock : "Stock non disponible";
    });
});

</script>
</body>
</html>
