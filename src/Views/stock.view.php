<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion du Stock</title>
  <link rel="stylesheet" href="../public/css/stock.css">
</head>
<body>
  <?php include_once("navbar.view.php"); ?>

  <form method="POST" action="stock.php">
    <div class="container">
      <div class="header">
        <h1>Gestion des Stocks</h1>
      </div>
      <!-- Zone des entrées -->
      <div class="zone">
        <select name="entree">
          <option value="" label="Sélectionner une entrée"></option>
          <?php foreach ($param["listeEntrees"] as $item): ?>
            <option value="<?= $item->id_article ?>"><?= $item->nom_article ?></option>
          <?php endforeach; ?>
        </select>
        <button class="btn-left">&#x2190;</button>
        <input type="text" id="stockInput" value="Stock non disponible" readonly>
        <button class="btn-right">&#x2192;</button>
      </div>
      <!-- Zone des plats -->
      <div class="zone">
        <select name="plat">
          <option value="" label="Sélectionner un plat"></option>
          <?php foreach ($param["listePlats"] as $item): ?>
            <option value="<?= $item->id_article ?>"><?= $item->nom_article ?></option>
          <?php endforeach; ?>
        </select>
        <button class="btn-left">&#x2190;</button>
        <input type="text" value="Stock plats" readonly>
        <button class="btn-right">&#x2192;</button>
      </div>
      <!-- Zone des desserts -->
      <div class="zone">
        <select name="dessert">
          <option value="" label="Sélectionner un dessert"></option>
          <?php foreach ($param["listeDesserts"] as $item): ?>
            <option value="<?= $item->id_article ?>"><?= $item->nom_article ?></option>
          <?php endforeach; ?>
        </select>
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
