<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/login.css" />
    <script src="../js/main.js"></script>
    <script src="../js/formHandlers.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="container">
    <header><button onclick="goToPage('index')"></button></header>
    <div class="main">
      <div class="section__info">
        <img src="../assets/app_icon.png" alt="app_logo" class="app__logo" />
        <strong>Login</strong>
      </div>
      <form
        class="form"
      >
        <input placeholder="Usuário" type="text" name="usuario" id="usuario" />
        <input placeholder="Senha" type="text" name="senha" id="senha" />
        <input type="button" value="login" id="button" onclick="loginHandler()" />
      </form>
      <div class="sigin__options">
        <p>Não Possuí Cadastro?</p>
        <strong onclick="goToPage('cadastro')">Registre-se</strong>
      </div>
    </div>
    <footer>
      <img src="../assets/footer_background.png" alt="footer_background" />
    </footer>
  </body>
</html>
