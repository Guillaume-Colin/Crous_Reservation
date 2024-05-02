<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horaire</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/horaire.css">
    <!-- <meta http-equiv="refresh" content="3"> -->
</head>

<script>
    function submitForm() {
        document.getElementById('Form').submit();
    }
</script>
<?php include_once("navbar.view.php"); ?>

<body
<?php 
    if ($param["submit"]=='O') {
        echo ' onload="submitForm()"';
    }
?>
>

<div class="container">
    <center> 
        <form method="POST" id="Form" 
            <?php 
                if ($param["submit"]=='O') {
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
            <input type="hidden" name="controleHoraire" value="O"/>
            
            <h2>Date</h2>
            <div class="rectangle">
                <input type="date" name="date" value="<?php echo $param["date"] ?>">
            </div> 
            
            <h2>Heure</h2>
            <div class="rectangle">
                <select name="plageHoraire">
                    <option value="0" <?php if ($param['plageHoraire'] == "0") { echo 'selected'; } ?> label="Choisissez une plage horaire"></option>
                    <option value="11:30:00" <?php if ($param['plageHoraire'] == "11:30:00") { echo 'selected'; } ?> label="De 11h30 à 12h00"></option>
                    <option value="12:00:00" <?php if ($param['plageHoraire'] == "12:00:00") { echo 'selected'; } ?> label="De 12h00 à 12h30"></option>
                    <option value="12:30:00" <?php if ($param['plageHoraire'] == "12:30:00") { echo 'selected'; } ?> label="De 12h30 à 13h00"></option>
                    <option value="13:00:00" <?php if ($param['plageHoraire'] == "13:00:00") { echo 'selected'; } ?> label="De 13h00 à 13h30"></option>
                </select>
            </div>

            <div class="button-container">
                <button class="annuler-button" type="button" onclick="window.location.href='./src/search.php'">Annuler</button>
                <button class="reserve-button" type="submit">Reserver</button>
            </div>
        </form>
    </center>
</div>

</body>
</html>
