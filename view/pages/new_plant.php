<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nova Planta</title>
    <link rel="manifest" href="http://localhost/backend-pi/manifest.json">
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/new_plant.css" />
    <script src="http://localhost/backend-pi/view/js/main.js"></script>
    <script src="http://localhost/backend-pi/utils/urls.js"></script>
    <script src="http://localhost/backend-pi/view/js/plantsHandler.js" defer></script>
    <script src="http://localhost/backend-pi/view/js/selectPlant.js" defer></script>
    <script src="../js/formHandlers.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="container">
    <header>
      <button onclick="goToPage('home')"><</button>
      <strong>Nova Planta</strong>
      <div></div>
    </header>
    <div class="main">
      <div class="section__info">
        <img src="../assets/plant_icon.png" alt="app_logo" class="app__logo" />
      </div>
      <form class="form">
        <label for="nomeCientifico">Espécie</label>
        <select id="nomeCientifico"></select>
        <label for="apelido">Nome Carinhoso</label>
        <input placeholder="" type="" name="apelido" id="apelido" />
        <label for="dtInicio">Quando você começou a cuidar dela?</label>
        <input type="date" name="dtInicio" id="dtinicio" />
        <label for="cor">Cor:</label>
        <input type="color" name="cor" value="#86A789" id="cor" />
        <br />
        <input type="button" value="Cadastrar" id="button" onclick="newPlant()" />
      </form>
    </div>
    <footer>
      <img src="../assets/footer_background.png" alt="footer_background" />
    </footer>
  </body>
</html>
