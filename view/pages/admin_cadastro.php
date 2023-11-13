<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/cadastro.css" />
    <script src="../js/main.js"></script>
    <script src="../js/adminHandler.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="container">
    <header><button onclick="goToPage('admin_login')"><</button></header>
    <div class="main">
      <label for="upload" class="section__info">
        <img src="../assets/register_icon.png" aria-hidden="true" alt="app_logo" class="app__logo" />
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
    <footer><img src="../assets/footer_background.png" alt="footer_background" /></footer>
  </body>
</html>
