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
    padding-top: 20px;
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
<body>
    <div class="container">
        <div class="header">
            <h1>Choix Menu</h1>
        </div>
        <div class="rectangle">
            <div class="section-title">
                <h3>Plat :</h3>
            </div>
            <div class="buttons">
                <button class="button">Végétarien</button>
                <button class="button">Button 2</button>
                <button class="button">Button 3</button>
                <button class="button">Button 4</button>
            </div>
            <select>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="4">Option 4</option>
            </select>
            <div class="section">
                <div class="section-title">
                    <h3>Entrée :</h3>
                </div>
                <div class="buttons">
                <button class="button">Button 1</button>
                <button class="button">Button 2</button>
                <button class="button">Button 3</button>
                <button class="button">Button 4</button>
            </div>
                <select>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                    <option value="4">Option 4</option>
                </select>
            </div>
            <div class="section">
                <div class="section-title">
                    <h3>Dessert :</h3>
                </div>
                <div class="buttons">
                <button class="button">Button 1</button>
                <button class="button">Button 2</button>
                <button class="button">Button 3</button>
                <button class="button">Button 4</button>
            </div>
                <select>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                    <option value="4">Option 4</option>
                </select>
            </div>
            <div class="footer">
                <button class="validate-button">Validate</button>
                <button class="cancel-button">Cancel</button>
            </div>
        </div>
    </div>
</body>
</html>
