<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro</title>
    <link rel="manifest" href="http://localhost/backend-pi/manifest.json">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/cadastro.css" />
    <script src="../js/main.js"></script>
    <script src="../js/especieHandler.js"></script>
    <script src="http://localhost/backend-pi/view/js/selectPlant.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="container">
    <header><button onclick="goToPage('login')"><</button></header>
    <div class="main">
      <label for="foto_planta" class="section__info">
        <img src="../assets/flower_ellipse.png" aria-hidden="true" alt="app_logo" class="app__logo" />
        <input placeholder="" type="file" name="foto" id="foto_planta" style="display: none;" />
        <strong style="font-family: 'Montserrat-Bold'; font-size: 24px; color: #225300;">
            Atualizar
        </strong>
      </label>
      <form class="form">
        <select id="nomeCientifico"></select>
        <input placeholder="Nome Popular" type="text" id="nome_popular" />
        <input placeholder="Data Inicio Florescimento" type="datetime-local" id="data_inicio_florescimento" id="" />
        <input placeholder="Data Fim Florescimento" type="datetime-local" id="data_fim_florescimento" id="" />
        <input placeholder="Idade Minima Florescimento" type="text" id="idade_minima_florescimento" id="" />
        <input placeholder="Quantidade De Agua(Irrigação)" type="text" id="quantidade_agua_irrigacao" id="" />
        <div style="display: flex; flex-direction: row; justify-content: space-around; width: 100%;">
          <input type="number" id="temperatura_ideal" style="width: 25% !important;" />
          <input type="number" id="umidade_ideal" style="width: 25% !important;" />
          <input type="number" id="iluminacao_ideal" style="width: 25% !important;" />
        </div>
        <input type="button" onclick="atualizar()" value="Concluir" id="button">
      </form>
    </div>
    <footer><img src="../assets/footer_background.png" alt="footer_background" /></footer>
  </body>
</html>
