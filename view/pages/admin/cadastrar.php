<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro</title>
    <link rel="manifest" href="http://localhost/backend-pi/manifest.json">
    <link rel="stylesheet" href="http://localhost/backend-pi/view/css/index.css" />
    <link rel="stylesheet" href="http://localhost/backend-pi/view/css/cadastro.css" />
    <script src="http://localhost/backend-pi/view/js/main.js"></script>
    <script src="htp://localhost/backend-pi/view/js/adminHandler.js"></script>
    <script src="https://kit.fontawesome.com/0558079a1f.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="container">
    <header>
      <button onclick="goToPage('admin/index')">
        <i class="fa-solid fa-circle-arrow-left"></i>
      </button>
    </header>
    <div class="main">0
      <label for="upload" class="section__info">
        <img src="http://localhost/backend-pi/view/assets/register_icon.png" aria-hidden="true" alt="app_logo" class="app__logo" />
        <input placeholder="" type="file" name="foto" id="upload" style="display: none;" />
        <strong>Cadastro</strong>
      </label>
      <form class="form">
        <input placeholder="Nome" type="text" id="nome" />
        <input placeholder="E-mail" type="text" id="email" />
        <input placeholder="Data de Nascimento" type="datetime-local" id="datanasc"  />
        <input placeholder="Usuario" type="text" id="usuario" />
        <input placeholder="Senha" type="text" id="senha" />

        <input type="button" value="Concluir" id="button" onclick="cadastro()" />
      </form>
    </div>
    <footer>
      <img src="http://localhost/backend-pi/view/assets/footer_background.png" alt="footer_background" />
    </footer>
  </body>
</html>
