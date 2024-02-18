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

<script>
  function submitForm()
  {
  document.getElementById('Form').submit();
 }
  </script>


<body
<?php 
        if ($param["submit"]=='O')
        {
          echo ' onload="submitForm()"';
        }
  ?>
>

 <div class="container">
  <center> 
  <?php         echo $param["submit"];        ?>

    <form method="POST" id="Form" 
      <?php 
        if ($param["submit"]=='O')
        {
          echo ' action="./Menu.php"';
        }
      ?>
      >
    <h1><?php echo $param["nomResto"] ?></h1>
    <h2><?php echo $param["typeResto"] ?></h2>
    <p><?php echo $param["descResto"] ?></p>
    <input type="hidden" name="idResto" value="<?php echo $param["idResto"] ?>"/>
    <input type="hidden" name="nomResto" value="<?php echo $param["nomResto"] ?>"/>
    <input type="hidden" name="typeResto" value="<?php echo $param["typeResto"] ?>"/>
    <input type="hidden" name="descResto" value="<?php echo $param["descResto"] ?>"/>
    <input type="hidden" name="controle" value="O"/>
    <h2>Date</h2>
    <div class="rectangle">
      <input type="date" name="date" value="<?php echo $param["date"] ?>">
    </div> 
    <h2>Heure</h2>
    <div class="rectangle">
    <select name="plageHoraire">
        <option value="0" <?php if ($param['plageHoraire'] == 0) { echo 'selected'; } ?> label="Choisissez une plage horaire"></option>
        <option value="1" <?php if ($param['plageHoraire'] == 1) { echo 'selected'; } ?> label="De 11h30 à 12h00"></option>
        <option value="2" <?php if ($param['plageHoraire'] == 2) { echo 'selected'; } ?> label="De 12h00 à 12h30"></option>
        <option value="3" <?php if ($param['plageHoraire'] == 3) { echo 'selected'; } ?> label="De 12h30 à 13h00"></option>
        <option value="4" <?php if ($param['plageHoraire'] == 4) { echo 'selected'; } ?> label="De 13h00 à 13h00"></option>
    </select>
</div>

    <h2>Nombre de places restantes</h2>
    <div class="places-container">
      <img src="placeholder_logo.png" alt="Logo">
      <p class="places-remaining">30 places disponibles</p>
    </div>
    <a href="./Accueil.php"><button class="cancel-button">Annuler</button></a>
    <button class="reserve-button" type="submit">Reserver</button>
      </form>



  </center></div>
</body>
</html>
