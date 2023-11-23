<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro</title>
    <link rel="manifest" href="http://localhost/backend-pi/manifest.json">
    <link rel="stylesheet" href="http://localhost/backend-pi/view/css/index.css" />
    <link rel="stylesheet" href="http://localhost/backend-pi/view/css/cadastro.css" />
    <script src="http://localhost;backend-pi/view/js/main.js"></script>
    <script src="http://localhost/backend-pi/view/js/selectPlant.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="container">
    <header>
      <button onclick="goToPage('admin_dicas')">
        <i class="fa-solid fa-circle-arrow-left"></i>
      </button>
    </header>
    <div class="main">
      <label for="upload" class="section__info">
        <img src="http://localhost/backend-pi/view/assets/atualizar_dicas.png" aria-hidden="true" alt="app_logo"/>
        <input placeholder="" type="file" name="foto" id="upload" style="display: none;" />
        <strong style="color: #225300; font-size: 25px;">Atualizar</strong><br>
      </label>
      <form action="http://localhost/backend-pi/controller/usuario/cadastro.php" class="form" method="post">
        <select id="nomeCientifico"></select>
        <input placeholder="Titulo" type="text" name="titulo" id="titulo" />

        <input placeholder="Subtitulo" type="text" name="subtitulo" id="" />
        <textarea name="corpo" class="corpo" placeholder="Corpo" cols="10" rows="10"></textarea>
        <input type="submit" value="Atualizar" id="button">
        <input type="submit" value="Deletar" id="button_delete" style="background-color: #820909; color:#ffffff; border-color: #820909" >
      </form>
    </div>
    <footer><img src="http://localhost/backend-pi/view/assets/footer_background.png" alt="footer_background" /></footer>
  </body>
