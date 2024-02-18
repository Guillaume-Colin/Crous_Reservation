<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horaire</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="./public/css/styles.css"> -->
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Alata", sans-serif;
            font-weight: 400;
            font-style: normal;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #ffffff; /* Couleur du premier fichier */
        }

        .container {
            text-align: center;
        }

        h1 {
            font-size: 2em;
            margin-bottom: 5px;
        }

        h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 20px;
        }

        .rectangle {
            border: 2px solid #333;
            width: 300px;
            padding: 10px;
            border-radius: 7px;
        }

        textarea {
            width: 100%;
            height: 100px;
        }

        .cancel-button {
            background-color: #FF9955;
            color: black;
            border-radius: 5px;
            margin-right: 20px; 
            cursor: pointer;
            padding: 15px 30px;
        }

        .reserve-button {
            background-color: #b00000;
            color: black;
            border-radius: 5px;
            margin-left: 10px; 
            cursor: pointer;
            padding: 15px 30px;
        }

        .button-container {
            margin-top: 40px;
        }

    </style>
</head>

<script>
    function submitForm() {
        document.getElementById('Form').submit();
    }
</script>
<?php include_once("./src/Views/navbar.view.php"); ?>

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
                    <option value="0" <?php if ($param['plageHoraire'] == 0) { echo 'selected'; } ?> label="Choisissez une plage horaire"></option>
                    <option value="11:30:00" <?php if ($param['plageHoraire'] == 1) { echo 'selected'; } ?> label="De 11h30 à 12h00"></option>
                    <option value="12:00:00" <?php if ($param['plageHoraire'] == 2) { echo 'selected'; } ?> label="De 12h00 à 12h30"></option>
                    <option value="12:30:00" <?php if ($param['plageHoraire'] == 3) { echo 'selected'; } ?> label="De 12h30 à 13h00"></option>
                    <option value="13:00:00" <?php if ($param['plageHoraire'] == 4) { echo 'selected'; } ?> label="De 13h00 à 13h00"></option>
                </select>
            </div>

            <div class="button-container">
                <a href="./Accueil.php"><button class="cancel-button">Annuler</button></a>
                <button class="reserve-button" type="submit">Reserver</button>
            </div>
        </form>
    </center>
</div>

</body>
</html>
