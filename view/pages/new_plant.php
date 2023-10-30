<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nova Planta</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/new_plant.css" />
    <script src="../js/main.js"></script>
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
      <form action="http://localhost/backend-pi/controller/planta/cadastro.php" class="form">
        <label for="nomeCientifico">Espécie</label>
        <select name="nomeCientifico" id="">
          <option value=""></option>
        </select>
        <label for="apelido">Nome Carinhoso</label>
        <input placeholder="" type="" name="apelido" id="" />
        <label for="dtinicio">Quando você começou a cuidar dela?</label>
        <input placeholder="" type="text" name="dtinicio" id="" />
        <br />
        <button onclick="goToPage('home')" type="button">Concluir</button>
      </form>
    </div>
    <footer>
      <img src="../assets/footer_background.png" alt="footer_background" />
    </footer>
  </body>
</html>
