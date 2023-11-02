<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/login.css" />
    <script src="../js/main.js"></script>
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
        action="http://localhost/backend-pi/controller/usuario/login.php"
        method="post"
        class="form"
        onsubmit="goToPage('home')"
      >
        <input placeholder="Usuário" type="text" name="usuario" id="" />
        <input placeholder="Senha" type="text" name="senha" id="" />
        <input type="submit" value="login" id="button" />
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
