<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
<title>Accueil</title>
<style>
  body {
    margin: 0;
    padding: 0;
    margin: 0;
    font-family: "Alata", sans-serif;
    overflow-y: auto;
  }
  
  #titrePrincipal {
    text-align: center; 
    font-size: 28px;
    margin-bottom: 20px; 
  }

  #grandRectangle {
    position: absolute;
    top: 25%;
    left: 20%;
    width: 60%;
    height: 50%;
    border: 2px solid #000;
    padding: 20px;
    border-radius: 10px;
  }

  #titre {
    font-size: 24px;
    margin: 0;
    margin-bottom: 10px;
    margin-left: 10px;
    display: inline-block;
  }

  #bouton {
    float: right;
    margin-top: 5px; 
    margin-left: 10px;
  }

  #sousRectangle {
    margin-top: 20px;
    width: 100%;
    border: 1px solid #000;
    padding: 5px; 
    box-sizing: border-box;
    overflow: hidden;
    border-radius: 10px;
    height: 50px; 
  }

  #sousTitre {
    float: left;
    font-size: 18px;
    padding-left: 10px;
    margin-top: 5px;
    margin-bottom: 5px; 
  }

  #date {
    float: left;
    margin-left: 20px;
    margin-top: 8px;
    margin-bottom: 5px; 
  }

  .boutonCarre {
    float: right;
    width: 30px;
    height: 30px;
    border: 2px solid #000;
    margin-left: 10px; 
    margin-top: 5px; 
    cursor: pointer;
    background-size: 70%; 
    background-repeat: no-repeat;
    background-position: center;
    border-radius: 5px;
  }

  .modifier-image {
    background-image: url("../../public/img/modifier.png"); 
  }

  .supprimer-image {
    background-image: url("../../public/img/supprimer.png"); /* Chemin vers l'image */
  }

</style>
</head>
<body>
  <h1 id="titrePrincipal">Bienvenue sur votre espace CROUS Réservation</h1>
  <div id="grandRectangle">
    <h2 id="titre">Mes réservations :</h2>
    <button id="bouton">
        
    </button>
    <div id="sousRectangle">
      <h3 id="sousTitre">Sous-titre</h3>
      <span id="date">18/02/2024</span>
      <button class="boutonCarre modifier-image"></button>
      <button class="boutonCarre supprimer-image"></button>
    </div>
  </div>
</body>
</html>
