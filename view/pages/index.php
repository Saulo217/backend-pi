<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SmartEco</title>
    <link rel="manifest" href="http://localhost/backend-pi/manifest.json">
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/main.css" />
    <script src="../js/main.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="start__hero">
    <div class="main__container">
      <div class="main__app__info">
        <img src="../assets/app_logo.png" alt="app_logo" class="app__logo" />
        <p>Seja Bem-Vindo ao <strong>SmartEco</strong></p>
      </div>
      <div class="login__options__buttons">
        <button onclick="goToPage('login')">Entrar</button>
        <button onclick="goToPage('cadastro')">Registre-se</button>

        <a href="http://localhost/backend-pi/view/pages/admin_login.php">DevMode
      </div>
    </div>
  </body>
  <script>
    if('serviceWorker' in navigator) {
      navigator.serviceWorker.register("http://localhost/backend-pi/worker.js");
    }
  </script>
</html>
