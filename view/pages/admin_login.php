<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/login.css" />
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
    <header><button onclick="goToPage('index')"></button></header>
    <div class="main">
      <div class="section__info">
        <img src="../assets/app_icon.png" alt="app_logo" class="app__logo" />
        <strong>Login</strong>
      </div>
      <form
        class="form"
      >
        <input placeholder="Administrador" type="text" id="admin" />
        <input placeholder="Senha" type="password" id="admPass" />
        <input type="button" value="login" id="button" onclick="login()" />
      </form>
      <div class="sigin__options">

      </div>
    </div>
    <footer>
      <img src="../assets/footer_background.png" alt="footer_background" />
    </footer>
  </body>
</html>
