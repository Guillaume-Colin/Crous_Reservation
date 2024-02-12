<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Horaire</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./public/css/styles.css">
</head>
<body>
 <div class="container">
  <center> 
    <h1>Lombarderie</h1>
    <h2>Restaurant universitaire</h2>
    <p>Un restaurant compris dans le campus de la Lombarderie Ã  deux pas du tram (Ligne 2).</p>
    <h2>Date</h2>
    <div class="rectangle">
      <input type="date">
    </div> 
    <h2>Heure</h2>
    <div class="rectangle">
      <input type="time">
    </div>
    <h2>Nombre de places restantes</h2>
    <div class="places-container">
      <img src="placeholder_logo.png" alt="Logo">
      <p class="places-remaining">30 places disponibles</p>
    </div>
    <button class="cancel-button">Annuler</button>
    <button class="reserve-button">Reserver</button>
  </center></div>
</body>
</html>
