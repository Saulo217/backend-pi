<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro</title>
    <link rel="manifest" href="http://localhost/backend-pi/manifest.json">
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/cadastro.css" />
    <script src="../js/main.js"></script>
    <script src="../js/plantsHandler.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="container">
    <header><button onclick="goToPage('admin_dicas')"><</button></header>
    <div class="main">
      <label for="upload" class="section__info">
        <img src="../assets/cadastro_dicas.png" aria-hidden="true" alt="app_logo" class="app__logo" />
        <input placeholder="" type="file" name="foto" id="upload" style="display: none;" />
        <strong style="color: #225300;">Nova Dica</strong>
      </label>
      <form class="form" >
        <input placeholder="Nome  Cientifico" type="text" id="nome_cientifico" />
        <input placeholder="Titulo" type="text" id="titulo" />
        <input placeholder="Subtitulo" type="text" id="subtitulo" />
        <textarea name="corpo" class="corpo" placeholder="Corpo" cols="10" rows="10" id="corpo"></textarea>
        <input type="buttton" onclick="cadastro()" value="Concluir" id="button">
      </form>
    </div>
    <footer><img src="../assets/footer_background.png" alt="footer_background" /></footer>
  </body>
</html>
